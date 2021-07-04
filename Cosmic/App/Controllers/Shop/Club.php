<?php
namespace App\Controllers\Shop;

use App\Config;

use App\Models\Log;
use App\Models\Core;
use App\Models\Player;

use Core\Locale;
use Core\View;

use Library\HotelApi;
use Library\Json;

class Club
{
    public $settings;
  
    public function __construct() 
    {
        $this->settings = Core::settings();
    }
  
    public function index()
    {
        if(!request()->player->id){
            redirect('/');
        }

        $this->settings->vip_badges = explode(",", preg_replace("/[^a-zA-Z0-9,_]/", "", $this->settings->vip_badges));
        $this->settings->diamonds = Player::getDiamonds(request()->player->id);
        $this->settings->vip_type   = Core::getCurrencyByType($this->settings->vip_currency_type)->currency;
        
        View::renderTemplate('Shop/club.html', [
            'title'   => Locale::get('core/title/shop/club'),
            'page'    => 'shop_club',
            'data'    => $this->settings,
            'content' => $this->settings->club_page_content
        ]);
    }

    public function buy() 
    {
        $currency = Player::getCurrencys(request()->player->id)[$this->settings->vip_currency_type];
        if(!isset($currency->amount)){
            response()->json(["status" => "error", "message" => Locale::get('core/notification/something_wrong')]);
        }
      
        if($currency->amount < $this->settings->vip_price) {
            response()->json(["status" => "error", "message" => Locale::get('core/notification/not_enough_points')]);
        }
      
        if(request()->player->rank >= $this->settings->vip_permission_id) {
            response()->json(["status" => "error", "message" => Locale::get('shop/club/already_vip')]);
        }
  
        $vip_badges = json_decode($this->settings->vip_badges, true);
        if(!empty($vip_badges)) {
            foreach($vip_badges as $badge) {
                HotelApi::execute('givebadge', array('user_id' => request()->player->id, 'badge' => ucfirst($badge['value'])));
            }
        }
      
        $vip_gift = json_decode($this->settings->vip_gift_items, true);
        if(!empty($vip_gift)) {
            foreach($vip_gift as $gift) {
                HotelApi::execute('sendgift', array('user_id' => request()->player->id, 'itemid' => $gift['value'], 'message' => $this->settings->vip_gift_message));
            }
        }
      
        if($this->settings->vip_membership_days != "lifetime") {
            Player::insertMembership(request()->player->id, request()->player->rank, strtotime('+' . $this->settings->vip_membership_days . ' days'));
        }
      
        HotelApi::execute('givepoints', ['user_id' => request()->player->id, 'points' => - $this->settings->vip_price, 'type' => $this->settings->vip_currency_type]);
        HotelApi::execute('setrank', ['user_id' => request()->player->id, 'rank' => $this->settings->vip_permission_id]);
      
        response()->json(["status" => "success", "message" => Locale::get('shop/club/purchase_success'), "replacepage" => "shop/club"]);
    }
}
