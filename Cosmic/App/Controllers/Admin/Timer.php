<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Log;
use App\Models\Player;
use App\Models\Core;
use App\Models\Permission;

use Core\View;

use Library\Json;

class Timer
{
    public function __construct()
    {
        $this->data = new \stdClass();
    }

    public function view()
    {
        $this->data->login = Admin::getStaffLoginStats();

        foreach ($this->data->login as $item){
            $item->total = $item->progress - $item->hours;
        }

        usort($this->data->login, function($a, $b) {
            if ($a->total == $b->total) {
                return 0;
            }
            return ($a->total > $b->total) ? -1 : 1;
        });

        View::renderTemplate('Admin/timer.html',
            [
                'data' => $this->data,
                'permission' => 'housekeeping_ranks'
            ]
        );
    }

    public function reset()
    {
        if (Admin::archiveStaffLoginStats()) {
            $this->data->login = Admin::newStaffLoginStats();
        }

        Log::addStaffLog('-1', 'Remise à zéro des compteurs de connexion staffs', request()->player->id, 'MANAGE');
        response()->json(["status" => "success", "message" => "Les compteurs ont été remis à zéro, n'oublie pas de recharger la page!"]);
    }
}
