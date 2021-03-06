<?php

namespace App\Controllers\Community;

use App\Models\Permission;
use App\Models\Player;

use Core\Locale;
use Core\View;

class Staff
{
    public function indexOld()
    {
        $direction = Permission::getDirection();
        $admin = Permission::getAdmin();
        $staffs = Permission::getStaffs();

        foreach ($direction as $users) {
            $users->settings = Player::getSettings($users->id);
        }

        foreach ($admin as $users) {
            $users->settings = Player::getSettings($users->id);
        }

        foreach ($staffs as $users) {
            $users->settings = Player::getSettings($users->id);
        }

        View::renderTemplate('Community/staff_old.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page' => 'community_staff',
            'action' => 'staff',
            'direction' => $direction,
            'admin' => $admin,
            'staffs' => $staffs
        ]);
    }

    public function index()
    {
        $ranks = Permission::getRanks();

        foreach ($ranks as $row) {

            if (!Permission::exists('website_invisible_staff', $row->id)) {
                $row->users = Player::getDataByRank($row->id);

                if (!empty($row->users) && is_array($row->users)) {
                    foreach ($row->users as $users) {
                        $users->settings = Player::getSettings($users->id);
                    }
                }
            } else {
                unset($ranks[array_search($row, $ranks)]);
            }
        }

        View::renderTemplate('Community/staff.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page' => 'community_staff',
            'action' => 'staff',
            'data' => $ranks
        ]);
    }

//    public function team()
//    {
//        $ranks = Permission::getTeams();
//
//        foreach($ranks as $row) {
//            $row->users = Player::getByExtraRank($row->id);
//        }
//
//        View::renderTemplate('Community/staff_old.html', [
//            'title' => Locale::get('core/title/community/staff'),
//            'page'  => 'community_staff',
//            'action' => 'team',
//            'data'  => $ranks
//        ]);
//    }
}