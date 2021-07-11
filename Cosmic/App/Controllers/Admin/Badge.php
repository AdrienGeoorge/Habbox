<?php
namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Player;
use App\Models\Core;

use Library\HotelApi;

use Core\Locale;
use Core\View;

class Badge
{
    public function action()
    {
        $validate = request()->validator->validate([
            'id'      => 'required|numeric',
            'action'  => 'required',
        ]);
      
        if(!$validate->isSuccess()) {
            return;
        }
      
        $id = input()->post('id')->value;
        $action = input()->post('action')->value;
      
        $badge = Admin::getBadgeById($id);
        if(empty($badge)) {
            response()->json(["status" => "error", "message" => Locale::get('core/notification/something_wrong')]);
        }
      
        if($action == "accept") {
          
            $player = Player::getDataById($badge->user_id);
            $imageExtension = str_replace(".gif", "", $badge->badge_imaging);
          
            if($player->online) {
                HotelApi::execute('givebadge', array('user_id' => $player->id, 'badge' => $imageExtension));
            } else {
                Admin::insertBadge($badge->user_id, $imageExtension);
            }
          
        } else {
            HotelApi::execute('givepoints', array('user_id' => $badge->user_id, 'points' => Core::settings()->draw_badge_price, 'type' => Core::settings()->draw_badge_currency));
            unlink(Core::settings()->draw_badge_imaging . $badge->badge_imaging);
        }
      
        Admin::updateBadgeRequest($id, $action);
        response()->json(["status" => "success", "message" => "Demande réussie!"]);
    }
  
    public function view()
    {
        $badges = Admin::getBadgeRequests();
        foreach($badges as $badge)
        {
            $badge->user_id = Player::getDataById($badge->user_id, array('username', 'look'));
        }
      
        View::renderTemplate('Admin/Management/badge.html', [
            'path' => Core::settings()->draw_badge_imaging,
            'badges' => $badges,
            'permission' => 'housekeeping_website_badgerequest',
        ]);
    }
}
