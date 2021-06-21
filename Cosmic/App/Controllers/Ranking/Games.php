<?php
namespace App\Controllers\Ranking;

use App\Config;

use App\Models\Player;
use App\Models\Core;
use App\Models\Community;

use Core\Locale;
use Core\View;

class Games
{
    public function index()
    {
        $currencys = array();

        foreach(Core::getCurrencys() as $type) 
        {
            $highscores = Community::getCurrencyHighscores($type->type, 10);
            $type = $type->currency;
            
            foreach($highscores as $highscore) {
                $highscore->player = Player::getDataById($highscore->user_id, ['username', 'look']);
            }
          
            $currencys[$type] = $highscores;
        }

        $achievements = Community::getAchievement(10);
        foreach ($achievements as $item) 
        {
            $item->player = Player::getDataById($item->user_id, array('username', 'look'));
        }
     
        $respectreceived = Community::getRespectsReceived(10);
        foreach ($respectreceived as $item) 
        {
            $item->player = Player::getDataById($item->user_id, array('username', 'look'));
        }
        
        $onlinetime = Community::getOnlineTime(10);
        foreach ($onlinetime as $item) 
        {
            $item->player = Player::getDataById($item->user_id, array('username', 'look'));
        }
        
        View::renderTemplate('Ranking/games.html', [
            'title' => Locale::get('core/title/games/ranking'),
            'page'  => 'games_ranking',
            'achievements' => $achievements,
            'respects' => $respectreceived,
            'online' => $onlinetime,
            'currencys'  => $currencys['GOTW']
        ]);
    }
}
