<?php

namespace App\Controllers\Home;

use App\Models\Player;
use Core\Locale;
use Core\View;
use stdClass;

class Stats
{
    public function __construct()
    {
        $this->data = new stdClass();
    }

    public function index()
    {
        if (isset(request()->player->id)) {
            $this->data->player = Player::getSettingsById(request()->player->id, array('achievement_score', 'respects_received', 'respects_given'));
            $this->data->player->nbFriends = count(Player::getFriends(request()->player->id, 100000));
            $this->data->player->nbRooms = count(Player::getRooms(request()->player->id));
            $this->data->player->nbPosedItems = count(Player::getPosedItems(request()->player->id));
            $this->data->player->nbPurchasedItems = count(Player::getPurchasedItems(request()->player->id));
            $this->data->player->nbVisitedRooms = count(Player::getVisitedRooms(request()->player->id));
            $this->data->player->nbMessages = count(Player::getMessages(request()->player->id));
            $this->data->player->achievements = Player::getAchievements(request()->player->id);
            $this->data->player->online = Player::getSettingsById(request()->player->id, array('online_time'));
        } else {
            redirect('/');
            exit;
        }

        View::renderTemplate('Home/stats.html', [
            'title' => Locale::get('website/stats/title'),
            'page' => 'stats',
            'data' => $this->data
        ], 10);

        return false;

    }
}