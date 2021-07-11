<?php
namespace App\Controllers\Admin;

use App\Helper;

use App\Models\Community;
use App\Models\Player;

use Library\Json;

use Core\View;

class Feeds
{
    public function getfeeds()
    {
        $feeds = Community::getFeeds(500);
        if ($feeds == null) {
            exit;
        }

        foreach ($feeds as $row) {
            $from_user = Player::getDataById($row->from_user_id, 'username');
            $to_user = Player::getDataById($row->to_user_id, 'username');

            if ($from_user == null || $to_user == null) {
                exit;
            }

            if (isset($from_user->username)) {
                $row->from_username = $from_user->username;
            }

            if ($to_user->username) {
                $row->to_username = $to_user->username;
            }

            $row->message = Helper::filterString($row->message);
            $row->timestamp = Helper::timediff($row->timestamp);
        }

        Json::filter($feeds, 'desc', 'id');
    }

    public function deletefeed()
    {
        $feed_id = Community::getFeedsByFeedId(input()->post('post')->value);
        if (empty($feed_id)) {
            response()->json(["status" => "error", "message" => "Aucun flux disponible"]);
        }

        Community::deleteFeedById($feed_id->id);
        response()->json(["status" => "success", "message" => "Le flux a été supprimé avec succès"]);
    }

    public function view()
    {
        View::renderTemplate('Admin/Management/feeds.html', ['permission' => 'housekeeping_website_feeds']);
    }
}