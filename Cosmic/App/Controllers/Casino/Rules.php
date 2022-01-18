<?php

namespace App\Controllers\Casino;

use App\Config;

use App\Models\Community;
use App\Models\Player;
use App\Models\Admin;
use App\Models\Core;

use Core\Locale;
use Core\View;

use Library\HotelApi;
use stdClass;

class Rules
{

    public function index()
    {
        View::renderTemplate('Casino/rules.html', [
            'title' => Locale::get('core/title/casino/rules'),
            'page' => 'casino_rules',
        ], 10);

        return false;
    }
}
