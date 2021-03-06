<?php
namespace Core;

use App\Auth;
use App\Config;
use App\Flash;

use App\Models\Permission;
use App\Models\Player;
use App\Models\Admin;
use App\Models\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

use Exception;

class View
{
    public static $cache;

    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . '/App/View/'.$view;

        if (is_readable($file)) {
            require $file;
        } else {
            throw new Exception("$file not found");
        }
    }

    public static function renderTemplate($template, $args = [], $cacheTime = false)
    {
        echo static::getTemplate($template, $args, $cacheTime);
    }

    public static function getResponse($template, $args) {
        $args['load'] = true;
        echo json_encode(array(
            "id"            => $args['page'],
            "title"         => (!empty($args['title']) ? $args['title'] . ' - ' . Config::site['sitename'] : null),
            "content"       => self::getTemplate($template, $args, null, true),
            "replacepage"   => null
        ));
    }

    public static function getTemplate($template, $args = [], $cacheTime = false, $request = false)
    {
        static $twig = null;
        
        if ($twig === null) {
            $loader = new FilesystemLoader(dirname(__DIR__) . '/App/View');
            $twig = new Environment($loader, array(
                'debug' => Config::debug
            ));
          
            $settings = Core::settings();
            
            $twig->addGlobal('site', Config::site); 
            $twig->addGlobal('client', Config::client);
            $twig->addGlobal('theme', $settings->theme);

            $findretros = filter_var($settings->findretros_enabled, FILTER_VALIDATE_BOOLEAN); 
            $twig->addGlobal('findretros', $findretros);
            $twig->addGlobal('cache_timestamp', $settings->cache_timestamp ?? null);
            $twig->addGlobal('csrf_token', csrf_token());
          
            $twig->addGlobal('publickey', $settings->recaptcha_publickey ?? null);

            $twig->addGlobal('locale', Locale::get('website/' . (isset($args['page']) ? $args['page'] : null), true));
            $twig->addGlobal('locale_base', Locale::get('website/base', true));
          
            $twig->addGlobal('online_count', \App\Models\Core::getOnlineCount());
 
            if (request()->player !== null) {

                $twig->addGlobal('player_currency', Player::getCurrencys(request()->player->id));
                $twig->addGlobal('player', request()->player);
                $twig->addGlobal('player_settings', Player::getSettings(request()->player->id));

                $twig->addGlobal('player_permissions', Permission::get(request()->player->rank));
              
                if(request()->getUrl()->contains('/housekeeping')) {
                    $twig->addGlobal('staff_count', Admin::getStaffCount(3));
                    $twig->addGlobal('items_count', Admin::getCatalogItems());
                    $twig->addGlobal('rooms_count', Admin::getRooms());
                    $twig->addGlobal('player_rank', Player::getHotelRank(request()->player->rank));
                    $twig->addGlobal('flash_messages', Flash::getMessages());
                    $twig->addGlobal('alert_messages', Admin::getAlertMessages());
                    $twig->addGlobal('ban_messages', Admin::getBanMessages());
                    $twig->addGlobal('ban_times', Admin::getBanTime(request()->player->rank));
                }
            } else {
                $twig->addGlobal('template', !isset($_COOKIE['template']) ? "light" : $_COOKIE['template']);
            }
        }

        if(static::$cache === null && !empty($cacheTime)) {
            \App\Middleware\CacheMiddleware::set($template, $args, $cacheTime);
        }

        if(request()->isAjax() && $request == false) {
            self::getResponse($template, $args);
            exit;
        }

        if(Auth::maintenance()) {
            $rank = (isset(request()->player->rank)) ? request()->player->rank : 1;
            if(!Permission::exists('housekeeping', $rank)) {
                Auth::logout();
                return $twig->render('maintenance.html');
            }
        }

        return $twig->render($template, $args);
    }
}
