<?php
namespace App\Controllers\Ranking;

use App\Config;

use App\Models\Player;
use App\Models\Core;
use App\Models\Community;

use Core\Locale;
use Core\View;

class Wealth
{
    public function index()
    {
        $currencys = array();

        foreach(Core::getCurrencys() as $type) 
        {
            $highscores = Community::getCurrencyHighscores($type->type, 5);
            $type = $type->currency;
            
            foreach($highscores as $highscore) {
                $highscore->player = Player::getDataById($highscore->user_id, ['username', 'look']);
            }
          
            $currencys[$type] = $highscores;
        }
      
        $credits = Community::getCredits(5);

        foreach ($credits as $item) 
        {
            $item->player = Player::getDataById($item->id, array('username', 'look'));
        }

        View::renderTemplate('Ranking/wealth.html', [
            'title' => Locale::get('core/title/games/ranking'),
            'page'  => 'games_ranking',
            'credits' => $credits,
            'currencys'  => $currencys
        ]);
    }
}
