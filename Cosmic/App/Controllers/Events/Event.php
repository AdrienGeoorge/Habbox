<?php

namespace App\Controllers\Events;

use Core\View;

class Event
{
    public function index()
    {
        View::renderTemplate('Events/index.html', [
            'title' => 'Nos évènements',
            'page'  => 'events',
        ]);
    }
}