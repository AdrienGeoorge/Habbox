<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Core;
use App\Models\Log;

use Core\View;

class Vouchers
{
    public function view()
    {
        $currencies = Core::getCurrencys();
        $codes = Admin::getAllCodePromo();

        View::renderTemplate('Admin/vouchers.html',
            [
                'permission' => 'housekeeping_ranks',
                'currencies' => $currencies,
                'codes' => $codes
            ]
        );
    }

    public function save()
    {
        $code = input()->post('voucher-code');
        $nbUse = input()->post('voucher-limit');
        $nbPoints = input()->post('voucher-points-number');
        $pointsType = input()->post('voucher-points-type');
        $credits = input()->post('voucher-credits');

        if ($code && $nbUse && $nbPoints && $pointsType && $credits) {
            $code = $code->value;
            $nbUse = $nbUse->value;
            $nbPoints = $nbPoints->value;
            $pointsType = $pointsType->value;
            $credits = $credits->value;

            if (Admin::checkCodePromoExist($code)) {
                response()->json(["status" => "error", "message" => "Ce code promo existe déjà..."]);
            } else {
                Admin::addCodePromo($code, $nbUse, $nbPoints, $pointsType, $credits);
                Log::addStaffLog('-1', 'Création d\'un code promo' . $code, request()->player->id, 'code_promo');

                response()->json(["status" => "success", "message" => "Code créé avec succès"]);
            }
        } else {
            response()->json(["status" => "error", "message" => "Tu dois remplir tous les champs!"]);
        }
    }
}
