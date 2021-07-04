<?php
namespace App\Controllers\Shop;

use App\Config;

use App\Models\Player;
use App\Models\Core;
use App\Models\Permission;
use App\Models\Shop as Offer;

use Library\HotelApi;

use Core\Locale;
use Core\View;

use stdClass;

class Shop
{
    private $data;

    public function __construct()
    {
        $this->data = new stdClass();
    }
  
    public function index()
    {
        if(!request()->player->id){
          redirect('/');
        }

        $this->data->shop = Offer::getOffers();
        $this->data->diamonds = Player::getDiamonds(request()->player->id);
        $currency = Core::settings()->paypal_currency;

        View::renderTemplate('Shop/shop.html', [
            'title' => Locale::get('core/title/shop/index'),
            'page'  => 'shop',
            'data'  => $this->data,
            'currency' => $currency
        ]);
    }
}