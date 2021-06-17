<?php
namespace App\Controllers\Settings;

use App\Hash;

use App\Models\Log;
use App\Models\Player;

use Core\Locale;
use Core\View;

use Library\Json;

class Email
{
    public function validate()
    {
        $validate = request()->validator->validate([
            'current_password' => 'required|max:100',
            'email'            => 'required|min:6|max:150|email'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $currentPassword = input('current_password');
        $email = input('email');

        if (!Hash::verify($currentPassword, request()->player->password)) {
            response()->json(["status" => "error", "message" => Locale::get('settings/current_password_invalid')]);
        }

        Player::update(request()->player->id, ['mail' => $email]);
        response()->json(["status" => "success", "message" => Locale::get('settings/email_saved'), "replacepage" => "settings/email"]);
    }

    public function index()
    {
        if(!isset(request()->player->id)) {
            redirect('/');
        }

        View::renderTemplate('Settings/email.html', [
            'title' => Locale::get('core/title/settings/email'),
            'page'  => 'settings_email'
        ]);
    }
}
