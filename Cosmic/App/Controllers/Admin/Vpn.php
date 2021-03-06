<?php
namespace App\Controllers\Admin;

use App\Config;
use App\Models\Ban;
use App\Models\Player;

use Core\Locale;
use Core\View;

use Library\Json;

use stdClass;

use MaxMind\Db\Reader\InvalidDatabaseException;
use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;

class Vpn
{
    private $data;

    public function __construct()
    {
        $this->apiKey = '2b3dcf9260762a123c4d1ddeb9ae50c3d188ce34f1f93fe8241d4a5b';
        $this->data = new stdClass();
    }

    public function ban()
    {
        $player = input()->post('id')->value;
        $reader = new Reader(__DIR__. '/../../' . Config::vpnLocation);

        try {

            $last_ip = Player::getDataByUsername($player, 'ip_current')->ip_current;
            $organisation = file_get_contents('https://api.ipdata.co/' . $last_ip . '?api-key=' . $this->apiKey);

            $record = $reader->asn($last_ip);

            $asn = Ban::getNetworkBanByAsn($record->autonomousSystemNumber);
            if ($asn != null) {
                response()->json(["status" => "success", "message" => "AS {$asn->asn} est déjà banni"]);
            }

            Ban::createNetworkBan($record->autonomousSystemNumber, json_decode($organisation)->asn->name, request()->player->id);
            response()->json(["status" => "success", "message" => "AS {$record->autonomousSystemNumber} est ajouté à notre liste d'interdiction"]);

        } catch (AddressNotFoundException $e) {
            response()->json(["status" => "error", "message" => Locale::get('core/notification/something_wrong')]);
        } catch (InvalidDatabaseException $e) {
            response()->json(["status" => "error", "message" => Locale::get('core/notification/something_wrong')]);
        }
    }

    public function delete()
    {
        $ban = Ban::getNetworkBanById(input()->post('asn')->value);
        if ($ban == null) {
            response()->json(["status" => "error", "message" => "AS {$ban->asn} n'est pas banni"]);
        }

        Ban::removeNetworkBan($ban->asn);
        response()->json(["status" => "success", "message" => "AS {$ban->asn}/{$ban->host} a été supprimé"]);
    }

    public function getasnbans()
    {
        $asn = Ban::getNetworkBans();
        if ($asn) {
            foreach ($asn as $row) {
                $row->added_by = Player::getDataById($row->added_by, 'username')->username;
            }
        }

        Json::filter($asn, 'desc', 'id');
    }

    public function view()
    {
        View::renderTemplate('Admin/Management/vpn.html', ['apiKey' => $this->apiKey, 'permission' => 'housekeeping_vpn_control']);
    }
}
