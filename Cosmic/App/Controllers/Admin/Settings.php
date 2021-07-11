<?php
namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Player;
use App\Models\Core;
use App\Models\Permission;

use Core\View;

use Library\Json;

class Settings
{
    public function __construct() 
    {
        $this->settings = Core::settings();
        $this->data = new \stdClass();
    }
  
    public function save()
    {
        foreach(input()->all() as $column => $value) {

            if($column == "vip_gift_items") {
              
                foreach(input()->post('vip_gift_items') as $gifts) {
                    unset($gifts->index);
                    unset($gifts->name);
                }
                
                $value = json_encode(input()->post('vip_gift_items'));
            }
          
            Admin::saveSettings($column, $value);
        }
      

        response()->json(["status" => "success", "message" => "Sauvegardé!"]);
    }
  
    public function addCurrency()
    {
        $currency = input()->post('currency')->value;
        $type = input()->post('type')->value;
        $amount = input()->post('amount')->value;
      
        $users = Player::getAllUsers(["id"]);
        foreach($users as $row) {
            Player::createCurrency($row->id, $type);
        }
      
        Core::addCurrency($currency, $type, $amount);
        response()->json(["status" => "success", "message" => "La monnaie a été ajoutée!"]);
    }
  
    public function deleteCurrency()
    {
        $type = input()->post('type')->value;
      
        $users = Player::getAllUsers();
        foreach($users as $row) {
            Player::deleteCurrency($row->id, $type);
        }
      
        if(Core::deleteCurrency($type, input()->post('currency')->value)) {
            response()->json(["status" => "success", "message" => "La devise a été supprimée"]);
        }
    }
  
    public function getItems()
    {
        $this->settings->vip_gift_items = json_decode($this->settings->vip_gift_items);
        if(!empty($this->settings->vip_gift_items)) {
            foreach($this->settings->vip_gift_items->value as $item) {
                $item->name = Admin::getFurnitureById($item->value)->item_name;
            }
        }
      
        echo json_encode($this->settings->vip_gift_items->value);
    }
  
    public function getCurrencys()
    {
        response()->json(Core::getCurrencys());
    }
  
    public function view()
    {
        $this->settings->vip_badges = json_decode($this->settings->vip_badges,true);
        $this->settings->vip_currency_type = Core::getCurrencyByType($this->settings->vip_currency_type);
        $this->settings->namechange_currency_type = Core::getCurrencyByType($this->settings->namechange_currency_type);
        $this->settings->draw_badge_currency = Core::getCurrencyByType($this->settings->draw_badge_currency);
        $this->settings->user_of_the_week = Player::getDataById($this->settings->user_of_the_week ?? 0, ['id', 'username']) ?? false;
        $this->settings->ranks = Permission::getRanks();

        View::renderTemplate('Admin/Management/settings.html', ['settings' => $this->settings, 'permission' => 'housekeeping_config']);
    }
}
