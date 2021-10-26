<?php

namespace App\Controllers\Events;

use Core\View;

class SquidGame
{
    public function index()
    {
        View::renderTemplate('Events/Squid-game/index.html', [
            'title' => 'Squid Game',
            'page'  => 'squid-game',
        ]);
    }
    public function moreInfos()
    {
        View::renderTemplate('Events/Squid-game/more.html', [
            'title' => 'Squid Game',
            'page'  => 'squid-game-infos',
        ]);
    }

    public function go()
    {
        View::renderTemplate('Events/Squid-game/go.html', [
            'title' => 'Squid Game',
            'page'  => 'squid-game-infos',
        ]);
    }
}