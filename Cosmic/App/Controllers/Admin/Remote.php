<?php
namespace App\Controllers\Admin;

use App\Config;
use App\Helper;
use App\Flash;

use App\Models\Ban;
use App\Models\Log;
use App\Models\Permission;
use App\Models\Player;
use App\Models\Admin;
use App\Models\PlayerStats;
use App\Models\Room;

use Core\View;

use Library\HotelApi;
use Library\Json;

use stdClass;

class Remote
{
    private $data;

    public function __construct()
    {
        $this->data = new stdClass();
    }

    public function user()
    {
        $username = explode("/", url()->getOriginalUrl())[5];
        if($username == null) {
            redirect('/');
            exit;
        }

        $this->user = Player::getDataByUsername($username);

        if (!isset($this->user)) {
            redirect('/housekeeping/remote/control');
        }

        $this->data->user               = (object)$this->user->username;
        $this->data->user->settings     = Player::getSettings($this->user->id);

        $this->data->user->ip_current   = Helper::convertIp($this->user->ip_current);
        $this->data->user->ip_register  = Helper::convertIp($this->user->ip_register);
        $this->data->user->last_login   = $this->user->online ? 'En ligne' : date("d-m-Y H:i:s", $this->user->last_login);

        $this->data->user->id           = $this->user->id;
        $this->data->user->username     = $this->user->username;
        $this->data->user->rank_id      = $this->user->rank;
        $this->data->user->extra_rank   = $this->user->extra_rank;
        $this->data->user->mail         = $this->user->mail;
        $this->data->user->motto        = Helper::filterString($this->user->motto);
        $this->data->user->credits      = $this->user->credits;
      
        $this->data->user->currencys     = Player::getCurrencys($this->user->id);

        if(Permission::exists('housekeeping_ranks', request()->player->rank)) {
            $this->data->hotel_ranks     = Permission::getRanks(true);
            $this->data->teams           = Permission::getTeams();
        }

        if ($this->user->rank >= request()->player->rank) {
            Log::addStaffLog($this->user->id, 'Aucune autorisation pour le remote control', request()->player->id, 'error');
            Flash::addMessage('Vous n\'avez pas la permission de faire ??a!', FLASH::ERROR);
            redirect('/housekeeping');
        }
      
        $log = isset($type) && !empty($type) ? $type : 'Toutes les informations sur les utilisateurs';
        Log::addStaffLog($this->user->id, 'V??rifi?? ' . $log, request()->player->id, 'check');

        $this->template();
    }

    public function template()
    {
        View::renderTemplate('Admin/Tools/remote.html', [
            'permission' => 'housekeeping_remote_control',
            'data' => $this->data
        ]);
    }

    public function view()
    {
        $this->data->alertmessages = Admin::getAlertMessages();
        $this->data->banmessages = Admin::getBanMessages();
        $this->data->bantime = Admin::getBanTime(request()->player->rank);

        View::renderTemplate('Admin/Tools/search.html', ['data' => $this->data, 'permission' => 'housekeeping_remote_control']);
        exit;
    }

    public function manage()
    {
        $validate = request()->validator->validate([
            'element'  => 'required|min:1'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $player = Player::getDataByUsername(input()->post('element')->value, 'username');
        response()->json(["location" => "/housekeeping/remote/user/view/{$player->username}"]);
    }

    public function reset()
    {
        $validate = request()->validator->validate([
            'element'   => 'required',
            'type'      => 'required'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }
     

        if(!Permission::exists('housekeeping_reset_user', request()->player->rank)) {
            Log::addStaffLog($player->id, 'Vous n\'avez pas la permission de r??initialiser un utilisateur', request()->player->id, 'error');
            response()->json(["status" => "error", "message" => "Vous n'avez pas la permission de r??initialiser un utilisateur"]);
        }
      
        $player = Player::getDataByUsername(input('element'));
  
        switch (input()->post('type')->value) {
            
            case 1:
            
                Log::addStaffLog($player->id, 'R??initialiser la mission', request()->player->id, 'reset');
                HotelApi::execute('setmotto', ['user_id' => $player->id, 'motto' => 'Ma mission a ??t?? mise ?? jour']);
            
                response()->json(["status" => "success", "message" => "La mission de {$player->username} a ??t?? r??initialis??e!"]);

                break;

            case 2: 
                HotelApi::execute('updateuser', ['user_id' => $player->id, 'look' => "hr-802-37.hd-185-1.ch-804-82.lg-280-73.sh-3068-1408-1408.wa-2001"]);
                response()->json(["status" => "success", "message" => "Le look de {$player->username} a ??t?? r??initialis??!"]);

                break;
        }
    }

    public function alert()
    {
        $validate = request()->validator->validate([
            'element'   => 'required',
            'action'    => 'required'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $player = Player::getDataByUsername(input()->post('element')->value, array('id', 'username', 'online'));
      
        if(!Permission::exists('housekeeping_alert_user', request()->player->rank)) {
            Log::addStaffLog($player->id, 'Vous n\'avez pas la permission d\'envoyer une alerte', request()->player->id, 'error');
            response()->json(["status" => "error", "message" => "Vous n'avez pas la permission d'envoyer une alerte!"]);
        }

        $alert_message = Admin::getAlertMessagesById(input()->post('reason')->value);

        if (!$player->online) {
            response()->json(["status" => "error", "message" => "Cet utilisateur est hors ligne!"]);
        }

        switch (input()->post('action')->value) {
            case 1:
                HotelApi::execute('disconnect', ['user_id' => $player->id]);
                break;

            case 2:
                HotelApi::execute('muteuser', ['user_id' => $player->id, 'duration' => 600]);
                break;
        }

        HotelApi::execute('alertuser', ['user_id' => $player->id, 'message' => $alert_message->message]);
        Log::addStaffLog($player->id, 'Alerte envoy??e: ' . $alert_message->message, request()->player->id, 'alert');
        response()->json(["status" => "success", "message" => "L'utilisateur {$player->username} a re??u une alerte!"]);
    }

    public function ban()
    {
        $validate = request()->validator->validate([
            'element'   => 'required',
            'reason'    => 'required',
            'type'      => 'required',
        ]);

        if(!$validate->isSuccess()) {
            return;
        }
      
        $player = Player::getDataByUsername(input()->post('element')->value, array('id', 'username', 'ip_current'));

        $ban_message = Admin::getBanMessagesById(input()->post('reason')->value);
        $ban_time = Admin::getBanTimeById(input()->post('expire')->value);
        
        Ban::insertBan($player->id, $player->ip_current, request()->player->id, time() + $ban_time->seconds, $ban_message->message, (input()->post('type')->value == "ip") ? "ip" : "account");
        
        HotelApi::execute('disconnect', ['user_id' => $player->id]);
        response()->json(["status" => "success", "message" => "L'utilisateur {$player->username} a ??t?? banni: {$ban_time->message}"]);
    }
  
    public function getplayer()
    {
        $player_id = input()->post('user_id')->value;

        $this->getChatLogs($player_id);
        $this->getUserLogs($player_id);
        $this->getClones($player_id);
        $this->getRoomLogs($player_id);
        $this->getTradeLogs($player_id);
        $this->getMailLogs($player_id);
        $this->getBanLogs($player_id);
        $this->getStaffLogs($player_id);

        Json::encode($this->data);
    }

    protected function getStaffLogs($player_id)
    {
        $this->data->stafflogs = Admin::getStaffLogsByPlayerId($player_id, 3000);

        if($this->data->stafflogs !== null)
          
            foreach ($this->data->stafflogs as $logs) {
              
                $logs->username = Player::getDataById($logs->player_id, 'username')->username;
                $logs->timestamp = date("d-m-Y H:i:s", $logs->timestamp);
              
                if (is_numeric($logs->target)) {
                    $logs->target = Player::getDataById($logs->target, 'username')->username ?? null;
                }
              
            }
    }

    protected function getMailLogs($player_id)
    {
        $this->data->maillogs = Admin::getMailLogs($player_id);
      
        foreach ($this->data->maillogs as $row) {
            $row->ip_address = Helper::convertIp($row->ip_address);
            $row->timestamp = date("d-m-Y H:i:s", $row->timestamp);
        }
    }

    protected function getRoomLogs($player_id)
    {
        $this->data->rooms = Room::getByPlayerId($player_id);

        foreach($this->data->rooms as $room) {
            $room->name = Helper::filterString($room->name);
            $room->description = Helper::filterString($room->description);
        }
    }

    protected function getTradeLogs($player_id)
    {
        $this->data->tradelogs = Admin::getTradeLogs($player_id);

        foreach($this->data->tradelogs as $item) {
            $item->user_one_id = Player::getDataById($item->user_one_id, ['username']);
            $item->user_two_id = Player::getDataById($item->user_two_id, ['username']);
          
            $item->items = Admin::getTradeLogItems($item->id);
          
            foreach($item->items as $trade) {
                $trade->user_id = Player::getDataById($trade->user_id, ['username']);
            }
          
            $item->timestamp = date("d-m-Y H:i:s", $item->timestamp);
        }
    }

    protected function getChatLogs($player_id)
    {
        $this->data->chatlogs = Admin::getChatLogs($player_id);
        
        foreach ($this->data->chatlogs as $logs) {
            
            if(!isset($logs->user_to_id)) {
               $logs->user_to_id = "deleted";   
            }
            
            $logs->message = Helper::filterString($logs->message);
            $logs->timestamp = date("d-m-Y H:i:s", $logs->timestamp);
          
            if($logs->user_to_id != 0) {
                $logs->message = '<b>' . Player::getDataById($logs->user_to_id, ['username'])->username . '</b>: ' . $logs->message;
            }
        }
    }

    protected function getUserLogs($player_id)
    {
        $this->data->userlogs = Admin::getNameChangesById($player_id);
      
        foreach ($this->data->userlogs as $logs) {
            $logs->timestamp = date("d-m-Y H:i:s", $logs->timestamp);
        }
    }

    protected function getClones($player_id)
    {
        $userObject = Player::getDataById($player_id);
        $this->data->duplicateUsers = Admin::getClones($userObject->ip_current, $userObject->ip_register);
      
        foreach ($this->data->duplicateUsers as $row) {
            $row->iplast = Helper::convertIp($row->ip_current);
            $row->ipreg = Helper::convertIp($row->ip_register);
            $row->last_login = $row->online ? 'En ligne' : date("d-m-Y H:i:s", $row->last_login);
        }
    }

    protected function getMessengerLogs($player_id)
    {
        $this->data->messengerlogs = Admin::getMessengerLogs($player_id);
      
        foreach($this->data->messengerlogs as $row) {
            $row->message   = Helper::filterString($row->message);
            $row->timestamp  = date("d-m-Y H:i:s", $row->timestamp);
        }
    }

    protected function getBanLogs($player_id) {
        $this->data->banlog = Admin::getBanLogByUserId($player_id);
      
        foreach($this->data->banlog as $ban) {
            $ban->user_staff_id = Player::getDataById($ban->user_staff_id, ['username']);
            $ban->ban_expire = date("d-m-Y H:i:s", $ban->ban_expire);
        }
    }

    public function unban($id)
    {
        if (empty(Ban::getBanById($id))) {
            response()->json(["status" => "error", "message" => "Ce joueur n'existe pas!"]);
        }

        Admin::deleteBan($ban);
        response()->json(["status" => "error", "message" => "Ce joueur est d??banni!"]);
    }

    public function change()
    {
        $validate = request()->validator->validate([
            'pincode'       => 'max:6|numeric',
            'motto'         => 'max:70'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $player = Player::getDataById(input()->post('user_id')->value);

        if(empty($player)) {
            response()->json(["status" => "error", "message" => "Ce joueur n'existe pas!"]);
        }

        $settings = Player::getSettings($player->id);

        $username = (input()->post('username')->value ? input()->post('username')->value : $player->username);
        $email = (input()->post('email')->value ? input()->post('email')->value : $player->mail);
        $pin_code = (input()->post('pincode')->value ? input()->post('pincode')->value : (string)$player->pincode);
        $motto = (input()->post('motto')->value ? input()->post('motto')->value : $player->motto);
        $rank = (input()->post('rank')->value ? input()->post('rank')->value : (string)$player->rank);
        $role = (input()->post('role')->value ? input()->post('role')->value : (string)$settings->role);
        $credits = (input()->post('credits')->value ? input()->post('credits')->value : (string)$player->credits);
        $extra_rank = (input()->post('extra_rank')->value ? input()->post('extra_rank')->value : null);
      
        $currencys = Player::getCurrencys($player->id);
        foreach($currencys as $currency) {
            if($currency) {
                $currency->oldamount = $currency->amount;
                $currency->amount = (int)(input()->post($currency->type)->value ? input()->post($currency->type)->value : (string)$currency->amount);
            }
        }

        if(Permission::exists('housekeeping_change_email', request()->player->rank)) {
            $validate = request()->validator->validate([
                'email' => 'required|min:6|max:72|email'
            ]);

            if(!$validate->isSuccess()) {
                exit;
            }
        }

        if(Permission::exists('housekeeping_ranks',  request()->player->rank)) {
            $validate = request()->validator->validate([
                'rank' => 'required|numeric',
            ]);

            if(!$validate->isSuccess()) {
                exit;
            }
          
            foreach($currencys as $currency) {
                if($currency && !is_int($currency->amount)) {
                    response()->json(["status" => "error", "message" => "La devise doit ??tre num??rique!"]);
                }
            }
        }
        
        if (Admin::changePlayerSettings($email ?? $player->mail, $username ?? $player->username, $motto, $pin_code, $player->id, $extra_rank)) {

            if($player->credits != $credits) {
                HotelApi::execute('givecredits', ['user_id' => $player->id, 'credits' => - $player->credits + $credits]);
            }

            if($player->rank != $rank) {
                HotelApi::execute('setrank', ['user_id' => $player->id, 'rank' => $rank]);
            }

            if($settings->role != $role) {
                Player::updateSettings($player->id, 'role', $role);
            }

            foreach($currencys as $currency) {
                if($currency) {
                    if ($currency->oldamount != $currency->amount) {
                        HotelApi::execute('givepoints', ['user_id' => $player->id, 'points' => - $currency->oldamount + $currency->amount, 'type' => $currency->type]);
                    } 
                }
            }
          
            Log::addStaffLog($player->id, 'Informations sur l\'utilisateur enregistr??es', request()->player->id, 'MANAGE');
            response()->json(["status" => "success", "message" => "Les informations de {$player->username} ont ??t?? mises ?? jour!"]);
        }
    }
}
