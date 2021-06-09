<?php
namespace App\Controllers\Home;

use App\Config;

use App\Models\Community;
use App\Models\Player;
use App\Models\Admin;
use App\Models\Core;

use Core\Locale;
use Core\View;

use stdClass;

class Index
{

    public function index()
    {       
        $news = Community::getNews(6);

        if(isset(request()->player->id)) {
            header('Location: /home');
        }

        View::renderTemplate('Home/index.html', [
            'title'     => Locale::get('core/title/home'),
            'page'      => 'index',
            'news'      => $news,
        ], 10);

        return false;

     }
}
