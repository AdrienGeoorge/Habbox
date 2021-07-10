<?php
namespace App\Controllers\Client;

use App\Core;
use App\Config;
use App\Token;

use App\Models\Api;
use App\Models\Ban;
use App\Models\Player;
use App\Models\Room;

use Core\Locale;
use Core\View;

use Library\HotelApi;

use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;
use MaxMind\Db\Reader\InvalidDatabaseException;
use stdClass;

class Client
{
    private $data;
    private $record;

    public function client()
    {
        if(!isset(request()->player->id)) {
            redirect('/');
        }else{
            redirect('/hotel');
        }

        $this->data = new stdClass();
    
        $reader = new Reader(__DIR__. '/../../' .Config::vpnLocation);

        try {
            $this->record = $reader->asn(getIpAddress());
        } catch (AddressNotFoundException $e) {
        } catch (InvalidDatabaseException $e) {
        }

        // Check if an ASN model record has been found
        if ($this->record) {

            // Get banned ASN models
            $asn = Ban::getNetworkBanByAsn($this->record->autonomousSystemNumber);

            // Render vpn view if ASN has been disallowed
            if ($asn) {
                View::renderTemplate('Client/vpn.html', ['asn' => $asn->asn, 'type' => 'vpn']);
                exit;
            }
        }


        $OS = substr($_SERVER['HTTP_USER_AGENT'], -2);

        // Check whether request is made using Puffin browser.
        $isPuffin = !empty(strpos($_SERVER['HTTP_USER_AGENT'], "Puffin"));

        if ($isPuffin && ($OS == "WD" || $OS == "LD" || $OS == "MD")) {
            View::renderTemplate('Client/vpn.html', ['type' => 'puffin']);
            exit;
        }

        $user = Player::getDataById(request()->player->id);
      
        $this->data->auth_ticket = Token::authTicket($user->id);
        $this->data->unique_id = sha1($user->id . '-' . time());

        Player::update($user->id, ["auth_ticket" => $this->data->auth_ticket]);
      
        if ($user->getMembership()) {
            HotelApi::execute('setrank', ['user_id' => $user->id, 'rank' => $user->getMembership()->old_rank]);
            $user->deleteMembership();
        }

        View::renderTemplate('Client/client.html', [
            'title' => Locale::get('core/title/hotel'),
            'room' => explode("=", url()->getOriginalUrl())[1] ?? null,
            'data'  => $this->data,
            'client' => Config::client,
            'site' => Config::site
        ]);
    }

    public function hotel()
    {
        if(!isset(request()->player->id)) {
            redirect('/');
        }

        View::renderTemplate('base.html', [
            'title' => Locale::get('core/title/hotel'),
            'page'  => 'home'
        ]);
    }

    public function count()
    {
        echo \App\Models\Core::getOnlineCount();
        exit;
    }
}
