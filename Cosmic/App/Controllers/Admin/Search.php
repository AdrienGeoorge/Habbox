<?php
namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Core;
use App\Models\Permission;

use Library\Json;

use stdClass;

class Search
{
    private $data;
    private $paths;

    public function __construct(){
        $this->data = new stdClass();
        $this->url = explode("=", url()->getOriginalUrl())[1] ?? null;
        $this->sub_url = explode("=", url()->getOriginalUrl())[2] ?? null;
    }
  
    public function emptyString()
    {
        echo Json::encode([array('id' => "none", 'text' => 'Sélectionnez un badge')]);
    }
  
    public function items()
    {
        $items = Admin::getItems($this->url);
        foreach($items as $item) {
            $this->paths[] = array('id' => $item->id, 'text' => $item->item_name);
        }

        echo Json::encode($this->paths);
    }
  
    public function currencys()
    {
        $currencys = Core::getCurrencys($this->url);
        foreach($currencys as $currency) {
            $this->paths[] = array('id' => $currency->type, 'text' => $currency->currency);
        }

        echo Json::encode($this->paths);
    }
  
    public function playerid()
    {
        if(!isset($this->url)) {
            response()->json(['id' => "none", 'text' => 'Où cherchez-vous?']);
        }

        $userObject = Admin::getPlayersByString($this->url);
        foreach($userObject as $user) {
            $this->paths[] = array('id' => $user->id, 'text' => $user->username);
        }

        echo Json::encode($this->paths);
    }

    public function catalogueitem()
    {
        if(!isset($this->url)) {
            response()->json(['id' => "none", 'text' => 'Choisissez une page de catalogue']);
        }

        $userObject = Admin::getCataloguePage($this->url);
        foreach($userObject as $user) {
            $this->paths[] = array('id' => $user->id, 'text' => $user->caption);
        }

        echo json_encode($this->paths);
    }
      
    public function playername()
    {
        if(!isset($this->url)) {
            response()->json(['id' => "none", 'text' => 'Où cherchez-vous?']);
        }

        $userObject = Admin::getPlayersByString($this->url);
        foreach($userObject as $user) {
            $this->paths[] = array('id' => $user->username, 'text' => $user->username);
        }

        echo json_encode($this->paths);
    }

    public function rooms()
    {
        if(!isset($this->url)) {
            response()->json(['id' => "none", 'text' => 'Où cherchez-vous?']);
        }

        $roomObject = Admin::getRoomsByString($this->url);
        foreach($roomObject as $room) {
            $this->paths[] = array('id' => $room->id, 'text' => $room->name.' - Appartement de '.$room->owner_name.' - '.$room->users.' visiteurs');
        }

        echo Json::encode($this->paths);
    }

    public function role()
    {
        $roleObject = Permission::getRoles($this->url);
        foreach($roleObject as $rank) {
            $this->paths[] = array('id' => $rank->id, 'text' => $rank->rank_name);
        }

        echo Json::encode($this->paths);
    }

    public function permission()
    {
        $permission = explode("&", $this->url, 2)[0];
        $role = (int) $this->sub_url;

        if($role === 0){
            $role = (int) $permission;
            $permission = null;
        }

        $permissionsObject = Permission::getPermissions($permission);

        foreach($permissionsObject as $item) {
            if(!Permission::permissionExists($role, $item->id)) {
                $this->paths[] = array('id' => $item->id, 'text' => $item->permission);
            }
        }
 
        if(empty($this->paths)) {
            response()->json(['id' => "none", 'text' => 'Ce rôle a toutes les permissions qu\'il peut avoir.']);
        }

        echo Json::encode($this->paths);
    }

    public function wordfilter()
    {
        if(!isset($this->url)) {
            response()->json(['id' => "none", 'text' => 'Où cherchez-vous?']);
        }

        $wordObject = Admin::getWordsByString($this->url);
        foreach ($wordObject as $user) {
            $this->paths[] = array('id' => $user->key, 'text' => $user->key);
        }

        echo Json::encode($this->paths);
    }

    public function banfields()
    {
        $this->data->alertmessages  = Admin::getAlertMessages();
        $this->data->banmessages    = Admin::getBanMessages();
        $this->data->bantime        = Admin::getBanTime(request()->player->rank);

        if(!empty($this->data)) {
            Json::encode($this->data);
        }
    }
}

