<?php
namespace App\Controllers\Shop;

use App\Models\Player;
use App\Models\Core;
use App\Models\Shop;

use Core\Locale;
use Core\View;

use Library\HotelApi;

class Drawbadge
{
    public $settings;
  
    public function __construct() 
    {
        $this->settings = Core::settings();
    }
  
    public function validate()
    {
        if(!isset(request()->player->id)){
            return;
        }
      
        $currency = Player::getCurrencys(request()->player->id)[$this->settings->draw_badge_currency];
        if(!isset($currency->amount)){
            response()->json(["status" => "error", "message" => Locale::get('core/notification/something_wrong')]);
        }
      
        if($currency->amount < $this->settings->draw_badge_price) {
            response()->json(["status" => "error", "message" => Locale::get('core/notification/not_enough_points')]);
        }
      
        if(preg_match("/^data:image\/(?<extension>(?:png|gif|jpg|jpeg));base64,(?<image>.+)$/", input('blob'), $matchings))
        {
           $imageData = base64_decode($matchings['image']);
          
           if (base64_encode(base64_decode($matchings['image'], true)) === $matchings['image'] && imagecreatefromstring(base64_decode($matchings['image']))) {
               $extension = $matchings['extension'];
               $filename = sprintf(uniqid() . ".%s", $extension);

               if(file_put_contents($this->settings->draw_badge_imaging . $filename, $imageData))
               {
                  HotelApi::execute('givepoints', ['user_id' => request()->player->id, 'points' => - $this->settings->draw_badge_price, 'type' => $this->settings->draw_badge_currency]);
                  Shop::insertBadge(request()->player->id, $filename);
                  response()->json(["status" => "success", "message" => Locale::get('core/notification/draw_badge_uploaded')]);
               } else {
                  response()->json(["status" => "error", "message" => Locale::get('core/notification/something_wrong')]);
               }
           } else {
              response()->json(["status" => "error", "message" => Locale::get('core/notification/something_wrong')]);
           }
        }
    }
  
    public function index()
    {
        if(!request()->player->id){
            redirect('/');
        }

        $this->settings->draw_badge_currency   = Core::getCurrencyByType($this->settings->draw_badge_currency)->currency;
        $this->settings->diamonds = Player::getDiamonds(request()->player->id);

        View::renderTemplate('Shop/draw.html', [
            'title'   => Locale::get('core/title/shop/badge'),
            'page'    => 'shop_history',
            'settings' => $this->settings
        ]);
    }
   
}