<?php

namespace App\Controllers\Home;

use App\Config;

use App\Models\Community;
use App\Models\Player;
use App\Models\Admin;
use App\Models\Core;

use Core\Locale;
use Core\View;

use stdClass;

class Home
{

    public function index()
    {
        $news = Community::getNews(4);
        $rooms = Community::getPopularRooms(7);

        if (isset(request()->player->id)) {
            $friends = Player::getFriends(request()->player->id, 25);
            $currencys = Player::getCurrencys(request()->player->id);
        }

        $dirnameBadges = './../nitro/c_images/album1584/';
        $dirBadges = scandir($dirnameBadges);
        $badges = [];
        foreach ($dirBadges as $file) {
            if ($file != '.' && $file != '..') {
                if (!is_dir($dirnameBadges . '/' . $file)) {
                    $badges[filemtime($dirnameBadges.'/'.$file)] = $file;
                }
            }
        }
        krsort($badges);

        $dirnameItems = './../nitro/c_images/catalogue/';
        $dirItems = scandir($dirnameItems);
        $items = [];
        foreach ($dirItems as $file) {
            if ($file != '.' && $file != '..') {
                if (!is_dir($dirnameItems . '/' . $file)) {
                    $items[filemtime($dirnameItems.'/'.$file)] = $file;
                }
            }
        }
        krsort($items);


        View::renderTemplate('Home/home.html', [
            'title' => !request()->player ? Locale::get('core/title/home') : request()->player->username,
            'page' => 'home',
            'rooms' => $rooms,
            'news' => $news,
            'currencys' => isset($currencys) ? $currencys : null,
            'friends' => isset($friends) ? $friends : null,
            'badges' => $badges,
            'items' => $items
        ], 10);

        return false;

    }
}
