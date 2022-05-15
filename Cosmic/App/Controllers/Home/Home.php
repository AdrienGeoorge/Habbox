<?php

namespace App\Controllers\Home;

use App\Config;

use App\Models\Community;
use App\Models\Player;
use App\Models\Admin;
use App\Models\Core;

use Core\Locale;
use Core\View;

use Library\HotelApi;
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

        foreach ($rooms as $room) {
            if (file_exists('./../public/nitro/camera/thumbnail/' . $room->id . '.png')) {
                $room->thumbnail = true;
            }
        }

        $dirnameBadges = './../public/nitro/c_images/album1584/';
        $dirBadges = scandir($dirnameBadges, SCANDIR_SORT_DESCENDING);
        $badges = [];
        foreach ($dirBadges as $file) {
            if(pathinfo($file, PATHINFO_EXTENSION) === 'gif'){
                $badges[$file] = filemtime($dirnameBadges . '/' . $file);
            }
        }

        arsort($badges);

        $dirnameItems = './../public/nitro/c_images/catalogue/';
        $dirItems = scandir($dirnameItems, SCANDIR_SORT_DESCENDING);
        $items = [];
        foreach ($dirItems as $file) {
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            if ($ext === 'jpeg' || $ext === 'jpg' || $ext === 'png' || $ext === 'gif') {
                if (strpos($file, 'icon_') !== false) {
                    $items[$file] = filemtime($dirnameItems . '/' . $file);
                }
            }
        }

        arsort($items);

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

    public function buildtool()
    {
        if (request()->player) {
            $type = $_POST['type'];
            $value = doubleval($_POST['value']);
            $player = request()->player;

            if ($type) {
                $type = explode('-', $type)[1];

                if ($type === 'hauteur') {
                    HotelApi::execute('BuildHeight', array('user_id' => $player->id, 'buildheight' => $value));
                    response()->json(["status" => "success", "message" => 'Hauteur mise à jour']);
                } elseif ($type === 'rotation') {
                    HotelApi::execute('SetRotation', array('user_id' => $player->id, 'rot' => $value));
                    response()->json(["status" => "success", "message" => 'Rotation mise à jour']);
                } elseif ($type === 'etat') {
                    HotelApi::execute('SetState', array('user_id' => $player->id, 'ss' => $value));
                    response()->json(["status" => "success", "message" => 'Etat mis à jour']);
                }
            }
        } else {
            response()->json(["status" => "error", "message" => "Tu dois être connecté pour utiliser la build tool..."]);
        }
    }
}
