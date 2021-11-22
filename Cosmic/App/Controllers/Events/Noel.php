<?php

namespace App\Controllers\Events;

use App\Models\Player;
use Core\View;

class Noel
{
    private $gifts;
    private $items;

    public function __construct()
    {
        $this->gifts = [
            1 => ['/assets/events/noel/credits.png', 'credits', 1500],
            2 => ['/assets/events/noel/diamonds.png', 'diamonds', 15],
            3 => ['/assets/events/noel/mobis.png', 'mobis', 'Extra rare'],
            4 => ['/assets/events/noel/duckets.png', 'duckets', 750],
            5 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            6 => ['/assets/events/noel/mobis.png', 'mobis', 'Extra rare'],
            7 => ['/assets/events/noel/mobis.png', 'mobis', 'Ultra rare'],
            8 => ['/assets/events/noel/vip.png', 'vip', 2],
            9 => ['/assets/events/noel/credits.png', 'credits', 3000],
            10 => ['/assets/events/noel/diamonds.png', 'diamonds', 30],
            11 => ['/assets/events/noel/vip.png', 'vip', 2],
            12 => ['/assets/events/noel/mobis.png', 'mobis', 'Suprême'],
            13 => ['/assets/events/noel/diamonds.png', 'diamonds', 25],
            14 => ['/assets/events/noel/vip.png', 'vip', 2],
            15 => ['/assets/events/noel/mobis.png', 'mobis', 'Collector'],
            16 => ['/assets/events/noel/diamonds.png', 'diamonds', 15],
            17 => ['/assets/events/noel/vip.png', 'vip', 2],
            18 => ['/assets/events/noel/mobis.png', 'mobis', 'Légendaire'],
            19 => ['/assets/events/noel/duckets.png', 'duckets', 1000],
            20 => ['/assets/events/noel/vip.png', 'vip', 2],
            21 => ['/assets/events/noel/mobis.png', 'mobis', 'Hyper rare'],
            22 => ['/assets/events/noel/diamonds.png', 'diamonds', 20],
            23 => ['/assets/events/noel/vip.png', 'vip', 1],
            24 => ['/assets/events/noel/diamonds.png', 'diamonds', 100],
            25 => ['/assets/events/noel/noel.png', 'tirage']
        ];

        $this->items = [
            'Extra rare' => [
                [405, 'Colonne dorée'],
                [2000018, 'Coussin - Argent'],
                [414, 'Lampe Dragon dorée'],
                [251, 'Statue d\'éléphant'],
                [308022581, 'Fontaine jade'],
                [353, 'Fumigène rose'],
                [262, 'Lampe jaune'],
                [892, 'Sorbetière Rare Blanche'],
                [429, 'Ventilo fuschia']
            ],
            'Ultra rare' => [
                [308022541, 'Coussin Violet Mystérieux'],
                [59723, 'Lampe turquoise (arc-en-ciel)'],
                [62169, 'Trône Candy'],
                [308021351, 'Chups Cheetos'],
                [59482, 'Poupée Vaudou Chewing-gum'],
                [308030151, 'Habbox Cola Chupa'],
                [52761, 'Rocher de Cristal'],
                [57132, 'Chevalier doré'],
                [308024251, 'Poisson Nature'],
                [57152, 'Borne Saphir']
            ],
            'Suprême' => [
                [73310, 'Mini Dragon turquoise'],
                [74518, 'Mini Trône Dragon noir'],
                [61280, 'Colonne Astral'],
                [647795420, 'Chicha Bonbons'],
                [59454, 'Dé Lave'],
                [871829531, 'Chaudron Magnum'],
                [308022391, 'Oeuf Nuage Opti'],
                [61357, 'Fontaine Pixel'],
                [49133, 'Parasol Suprême'],
            ],
            'Collector' => [
                [69429, 'Dé magique Albino'],
                [66857, 'Trophée Niko Corail'],
                [64073, 'Portique Dragon bordeaux'],
                [63892, 'Poisson Enflammé'],
                [63748, 'Sorbetière Festif'],
                [66831, 'Dragon Fièvre'],
                [74063, 'Sorbetière Dragon orange'],
                [73855, 'Dragon Somptueux blanc'],
                [63800, 'Oeuf Trésor'],
                [63765, 'Oeuf Malabar']
            ],
            'Légendaire' => [
                [57109, 'Habbox Cola Ange'],
                [57106, 'Serpent Anubis'],
                [57530, 'Trône Executive'],
                [57482, 'Coussin Milka'],
                [52802, 'Coffre Omega']
            ],
            'Hyper rare' => [
                [9542388, 'Dragon Printemps'],
                [75837007, 'Poupée Vaudou Maya'],
                [52547, 'Dé Diamant']
            ]
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
        if (request()->player) {
            View::renderTemplate('Events/Noel/calendrier.html', [
                'title' => 'Mon calendrier de l\'avent',
                'page' => 'noel-calendrier',
                'day' => date('jS'),
                'month' => date('n'),
                'gifts' => $this->gifts
            ]);
        } else {
            redirect('/');
        }
    }

    public function getGift()
    {
        if (request()->player) {
            $dayReceived = intval($_POST['day']);
            $date = new \DateTimeImmutable('now');
            $player = request()->player;

//            if ($date->format('n') != 12) {
//                response()->json(["status" => "error", "message" => "Sois patient, le calendrier de l'avent ne sera disponible qu'à partir du 1er décembre..."]);
//            } else {
                $day = $date->format('jS');
//                if ($dayReceived < $day) {
//                    response()->json(["status" => "error", "message" => "Tu arrives trop tard..."]);
//                } elseif ($dayReceived > $day) {
//                    response()->json(["status" => "error", "message" => "Tu es en avance, reviens plus tard"]);
//                } else {
                    if ($this->gifts[$dayReceived][1] === 'mobis') {
                        $item = $this->items[$this->gifts[$dayReceived][2]][array_rand($this->items[$this->gifts[$dayReceived][2]])];
                        $result = Player::sendChristmasItem($player, $this->gifts[$dayReceived][2], $item[1], $item[0]);
                    } elseif ($this->gifts[$dayReceived][1] === 'tirage') {
                        $result = Player::addToChristmasLotery($player);
                    } else {
                        $result = Player::sendChristmasGift($player, $this->gifts[$dayReceived][1], $this->gifts[$dayReceived][2]);
                    }
                    if ($result[0] === 'ok') {
                        response()->json(["status" => "success", "message" => $result[1]]);
                    } elseif ($result[0] === 'already-received') {
                        response()->json(["status" => "error", "message" => "Tu as déjà reçu ton cadeau journalier!"]);
                    } elseif ($result[0] === 'error') {
                        response()->json(["status" => "error", "message" => $result[1]]);
                    }
//                }
//            }
        } else {
            response()->json(["status" => "error", "message" => "Tu dois être connecté pour pouvoir réclamer ta récompense..."]);
        }
    }
}