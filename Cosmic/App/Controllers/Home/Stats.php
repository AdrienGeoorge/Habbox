<?php

namespace App\Controllers\Home;

use App\Models\Community;
use App\Models\Core;
use App\Models\Player;
use Core\Locale;
use Core\View;
use stdClass;

class Stats
{
    public function index()
    {

        View::renderTemplate('Home/stats.html', [
            'title'     => !request()->player ? Locale::get('core/title/home') : request()->player->username,
            'page'      => 'home',
        ], 10);

        return false;

    }
}