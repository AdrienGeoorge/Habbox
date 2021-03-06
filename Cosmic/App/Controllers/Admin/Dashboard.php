<?php
namespace App\Controllers\Admin;

use App\Helper;

use App\Models\Permission;
use App\Models\Admin;
use App\Models\Core;

use Core\View;

use Library\Json;

class Dashboard
{
    public function latestplayers()
    {
        $latest_users = Admin::getLatestPlayers();
        if ($latest_users == null) {
            exit;
        }

        foreach ($latest_users as $row) {
            $row->id = $row->id;
            $row->last_login  = $row->online ? 'En ligne' : date("d-m-Y H:i:s", $row->last_login);
            $row->ip_current  = Helper::convertIp($row->ip_current);
            $row->ip_register = Helper::convertIp($row->ip_register);

            if (!Permission::exists('housekeeping_change_email', request()->player->rank)) {
                $row->mail = '';
            }
        }

        Json::filter($latest_users, 'desc', 'id');
    }

    public function latestnamechanges()
    {
        Json::filter(Admin::getNameChanges(), 'desc', 'id');
    }

    public function usersonline()
    {
        $online_users = Admin::getOnlinePlayers();

        foreach ($online_users as $row) {
            $row->ip = Helper::convertIp($row->ip_register);
        }

        Json::filter($online_users, 'desc', 'id');
    }
  
    public function maintenance()
    {
        if (!Permission::exists('housekeeping_permissions', request()->player->rank)) {
            response()->json(["status" => "error", "message" => "Vous n'avez pas le droit de faire ça!"]);
        }
      
        $maintenance = Admin::saveSettings('maintenance', (Core::settings()->maintenance == "1") ? "0" : "1");
        response()->json(["status" => "success", "message" => "Mise à jour de la maintenance"]);
    }
  
    public function clearcache()
    {
        Admin::saveSettings('cache_timestamp', md5(time()));
        response()->json(["status" => "success", "message" => "Cache supprimés!"]);
    }

    public function view()
    {
        View::renderTemplate('Admin/home.html', ['permission' => 'housekeeping']);
    }
}
