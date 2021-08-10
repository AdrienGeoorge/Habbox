<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Player;
use App\Models\Core;
use App\Models\Permission;

use Core\View;

use Library\Json;

class Stats
{
    public function __construct()
    {
        $this->data = new \stdClass();
    }

    public function view()
    {
        $this->data->players = Admin::getPlayers();
        $this->data->guilds = Admin::getGuilds();
        $this->data->bans = Admin::getBans();
        $this->data->rooms = Admin::getRooms();

        View::renderTemplate('Admin/stats.html',
            [
                'data' => $this->data,
                'permission' => 'housekeeping'
            ]
        );
    }
}
