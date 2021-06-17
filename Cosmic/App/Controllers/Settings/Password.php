<?php
namespace App\Controllers\Settings;

use App\Hash;
use App\Models\Player;

use Core\Locale;
use Core\Session;
use Core\View;

use Library\Json;

use stdClass;

class Password
{
    public function __construct()
    {
        $this->data = new stdClass();
    }

    public function request()
    {
        $validate = request()->validator->validate([
            'current_password'  => 'required|min:6',
            'new_password'      => 'required|min:6|max:32',
            'repeated_password' => 'required|same:new_password'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $currentPassword = input('current_password');
        $this->data->newpin = input('new_password');

        if (!Hash::verify($currentPassword, request()->player->password)) {
            response()->json(["status" => "error", "message" => Locale::get('settings/current_password_invalid')]);
        }
      
        Player::resetPassword(request()->player->id, $this->data->newpin);
        Session::destroy();

        response()->json(["status" => "success", "message" => Locale::get('settings/password_saved'), "pagetime" => "/"]);
    }

    public function index()
    {
        if(!isset(request()->player->id)) {
            redirect('/');
        }

        View::renderTemplate('Settings/password.html', [
            'title' => Locale::get('core/title/settings/password'),
            'page'  => 'settings_password',
            'data'  => $this->data
        ]);
    }
}
