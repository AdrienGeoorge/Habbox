<?php
namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Core;
use App\Models\Permission;

use Core\View;

use Library\Json;

use stdClass;
use QueryBuilder;

class Permissions
{
    private $data;

    public function __construct()
    {
        $this->data = new stdClass();
    }

    public function getranks()
    {
        echo Json::encode(Admin::getRanks(true));
    }

    public function getpermissioncommands()
    {
        //* todo https://asteroidcms.nl/housekeeping/permissions/manage#
    }

    public function changepermissionrank()
    {
        $command_id = input()->post('command_id')->value;
        $minimum_rk = filter_var(input()->post('minimum_rank')->value, FILTER_SANITIZE_NUMBER_INT);

        if (Admin::changeMinimumRank($command_id, $minimum_rk)) {
            response()->json(["status" => "success", "message" => "Les permissions du rank ont été modifiées!"]);
        }
    }

    public function createrank()
    {     
        $commandsArray = json_decode(input()->post('value')->value);
        $permissionsArray = json_decode(input()->post('post')->value, true);

        foreach ($commandsArray as $key => $item) {
            if ($item->id == "fname") {
                $this->data->name = $item->value;
            } else {
                $obj = $item->id;
                if ($item->value === "on") {
                    $this->data->$obj = '0';
                } else {
                    $this->data->$obj = $item->value;
                }
            }
        }

        if (empty($this->data->rank_name)) {
            response()->json(["status" => "error", "message" => "Le rank ne peut pas être vide!"]);
        }
      
        if (in_array($this->data->rank_name, array_column(Admin::getRanks(true), 'name'))) {
            response()->json(["status" => "error", "message" => "Le nom du rank est déjà utilisé!"]);
        }
  
        Admin::addRank($this->data, $permissionsArray);
        response()->json(["status" => "success", "message" => "Rank ajouté avec succès!"]);
    }

    public function getwebsiteranks()
    {
        $this->data->ranks = Admin::getAllWebPermissions();
        Json::filter($this->data->ranks, 'desc', 'id');
    }

    public function edit()
    {
        $this->data->ranks = Admin::getRankById(input()->post('post')->value);
        echo Json::encode($this->data);
    }

    public function wizard()
    {
        $permission = Admin::getWebPermissions(input()->post('post')->value);
        echo Json::encode($permission);
    }

    public function deleteteam()
    {
        Admin::deleteTeam(input()->post('id')->value);
        Admin::updateTeamPlayer(input()->post('id')->value);
        response()->json(["status" => "success", "message" => "L'équipe a été supprimée!"]);
    }
  
    public function addteam()
    {
        Admin::addTeam(input()->post('rank_name')->value, input()->post('rank_desciption')->value);
        response()->json(["status" => "success", "message" => "L'équipe a été ajoutée!"]);
    }
  
    public function getteams()
    {
        Json::filter(Permission::getTeams(), 'desc', 'id');
    } 
 
    public function getpermissions()
    {
        $this->data->permissions = Permission::get(input()->post('roleid')->value);
        Json::filter($this->data->permissions, 'desc', 'id');
    }

    public function search()
    {
        response()->json(["status" => "success", "message" => "Les permissions ont été chargées!"]);
    }

    public function addpermission()
    {
        $role_id = input()->post('roleid')->value;
        $permission_id = input()->post('permissionid')->value;

        if (empty($role_id) || empty($permission_id)) {
            response()->json(["status" => "error", "message" => "La permission ne peut pas être ajoutée!"]);
        }

        if (Admin::roleExists($role_id, $permission_id))  {
            response()->json(["status" => "error", "message" => "Les permissions ont déjà été ajoutées à ce rôle!"]);
        }

        Admin::createPermission($role_id, $permission_id);
        response()->json(["status" => "success", "message" => "Les permissions ont été ajoutées!"]);
    }

    public function delete()
    {
        $permission = Permission::getPermissionById(input()->post('id')->value);
        if (empty($permission)) {
            response()->json(["status" => "error", "message" => "Aucune permission trouvée!"]);
        }

        Admin::deletePermission($permission->id);
        response()->json(["status" => "success", "message" => "Les permissions ont été supprimées!"]);
    }

    public function view()
    {
        View::renderTemplate('Admin/Management/permissions.html', ['permission' => 'housekeeping_permissions', 'permission_columns' => Permission::getAllColumns()]);
    }
}