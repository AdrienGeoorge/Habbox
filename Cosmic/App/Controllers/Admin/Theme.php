<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Log;

use Core\View;

class Theme
{
    public function __construct()
    {
        $this->data = new \stdClass();
    }

    public function view()
    {
        View::renderTemplate('Admin/theme.html',
            [
                'permission' => 'housekeeping_config'
            ]
        );
    }

    public function change()
    {
        $theme = $_POST['theme'];

        if ($theme) {
            Admin::changeTheme($theme);
            Log::addStaffLog('-1', 'Changement du thème', request()->player->id, 'theme');
            response()->json(["status" => "success", "message" => "Le thème a  bien été changé!"]);
        } else {
            response()->json(["status" => "error", "message" => "Erreur lors du changement du thème..."]);
        }
    }
}
