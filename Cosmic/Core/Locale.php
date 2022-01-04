<?php
namespace Core;

use App\Config;
use App\Models\Player;

class Locale
{
    /**
     * Get the language value
     *
     * @param $path
     * @param bool $all
     * @return bool|mixed
     */
    public static function get($path = null, $all = false)
    {
        $language = 'FR';
        if (request()->player) {
            $settings = Player::getSettings(request()->player->id);
            if ($settings) {
                $language = $settings->language;
            }
        }

        require_once __DIR__.'/../Locale/'.$language.'.php';

        if ($path) {
            $locale = $GLOBALS['language'];
            $path = explode('/', $path);

            if($all) {
                if(isset($locale[$path[0]][$path[1]]))
                    return $locale[$path[0]][$path[1]];
            }

            foreach ($path as $bit) {
                if (isset($locale[$bit])) {
                    $locale = $locale[$bit];
                }
            }

            return $locale;
        }

        return false;
    }
}