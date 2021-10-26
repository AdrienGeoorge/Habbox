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
        $settings = Core::settings();

        if (isset(request()->player->id)) {
            $friends = Player::getFriends(request()->player->id, 25);
            $currencys = Player::getCurrencys(request()->player->id);
        }

        $dirnameBadges = './../public/nitro/c_images/album1584/';
        $dirBadges = array_slice(preg_grep('~\.gif$~', scandir($dirnameBadges, SCANDIR_SORT_DESCENDING)), 0, 6);
        $badges = [];
        foreach ($dirBadges as $file) {
            $badges[filemtime($dirnameBadges . '/' . $file)] = $file;
        }

        $dirnameItems = './../public/nitro/c_images/catalogue/';
        $dirItems = array_slice(preg_grep('~\.(jpeg|jpg|png|gif)$~', scandir($dirnameItems, SCANDIR_SORT_DESCENDING)), 0, 6);
        $items = [];
        foreach ($dirItems as $file) {
            if (strpos($file, 'icon_') !== false) {
                $items[filemtime($dirnameItems . '/' . $file)] = $file;
            }
        }

        View::renderTemplate('Home/home.html', [
            'title' => !request()->player ? Locale::get('core/title/home') : request()->player->username,
            'page' => 'home',
            'rooms' => $rooms,
            'news' => $news,
            'currencys' => isset($currencys) ? $currencys : null,
            'friends' => isset($friends) ? $friends : null,
            'badges' => $badges,
            'items' => $items,
            'settings' => $settings
        ], 10);

        return false;

    }
}
