<?php

namespace App\Controllers\Events;

use App\Models\Log;
use Core\View;

class Noel
{
    private array $gifts;

    public function __construct()
    {
        $this->gifts = [
            1 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            2 => ['/assets/events/noel/vip.png', 'vip', 2],
            3 => ['/assets/events/noel/badge.png', 'badge', 'COD'],
            4 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            5 => ['/assets/events/noel/vip.png', 'vip', 2],
            6 => ['/assets/events/noel/badge.png', 'badge', 'COD'],
            7 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            8 => ['/assets/events/noel/vip.png', 'vip', 2],
            9 => ['/assets/events/noel/badge.png', 'badge', 'COD'],
            10 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            11 => ['/assets/events/noel/vip.png', 'vip', 2],
            12 => ['/assets/events/noel/badge.png', 'badge', 'COD'],
            13 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            14 => ['/assets/events/noel/vip.png', 'vip', 2],
            15 => ['/assets/events/noel/badge.png', 'badge', 'COD'],
            16 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            17 => ['/assets/events/noel/vip.png', 'vip', 2],
            18 => ['/assets/events/noel/badge.png', 'badge', 'COD'],
            19 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            20 => ['/assets/events/noel/vip.png', 'vip', 2],
            21 => ['/assets/events/noel/badge.png', 'badge', 'COD'],
            22 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            23 => ['/assets/events/noel/vip.png', 'vip', 2],
            24 => ['/assets/events/noel/badge.png', 'badge', 'COD'],
            25 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
        ];
    }

    public function index()
    {
        View::renderTemplate('Events/Noel/index.html', [
            'title' => 'Noël sur Habbox',
            'page' => 'noel',
        ]);
    }

    public function calendrier()
    {
        View::renderTemplate('Events/Noel/calendrier.html', [
            'title' => 'Mon calendrier de l\'avent',
            'page' => 'noel-calendrier',
            'day' => date('jS'),
            'gifts' => $this->gifts
        ]);
    }

    public function getGift()
    {
        $dayReceived = intval($_POST['day']);
        $day = date('jS');

        if ($dayReceived < $day) {
            response()->json(["status" => "error", "message" => "Tu arrives trop tard..."]);
        } elseif ($dayReceived > $day) {
            response()->json(["status" => "error", "message" => "Tu es en avance, reviens plus tard"]);
        } else {
            response()->json(["status" => "success", "message" => "Tu as bien reçu ton cadeau"]);
        }
    }
}