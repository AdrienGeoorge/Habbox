<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Log;

use Core\View;
use Library\Upload;

class UploadBadges
{
    private $file;

    public function view()
    {
        $dirnameBadges = '../public/nitro/c_images/album1584/';
        $dirBadges = preg_grep('~\.gif$~', scandir($dirnameBadges, SCANDIR_SORT_DESCENDING));
        $badges = [];

        foreach ($dirBadges as $file) {
            $badges[filemtime($dirnameBadges . '/' . $file)] = $file;
        }

        View::renderTemplate('Admin/Upload/badges.html',
            [
                'badges' => $badges,
                'permission' => 'housekeeping_ranks'
            ]
        );
    }

    public function add()
    {
        $imagePath = input()->file('imagesUpload')->filename;
        $code = input()->post('code')->value;
        $title = input()->post('title')->value;

        if (!empty($imagePath) && !empty($code) && !empty($title)) {
            if ($this->imageUpload($imagePath, $code)) {
                $file = '../public/nitro/gamedata/external_flash_texts.txt';
                $fp = fopen($file, 'a');
                fwrite($fp, "\r\nbadge_name_" . $code . "=" . $title . "");
                fclose($fp);

                Log::addStaffLog('-1', 'Ajout d\'un badge', request()->player->id, 'upload');
                response()->json(["status" => "success", "message" => "Badge upload avec succès!"]);
            } else {
                response()->json(["status" => "error", "message" => "Un badge avec ce nom existe déjà!"]);
            }
        } else {
            response()->json(["status" => "error", "message" => "Merci de remplir tous les champs!"]);
        }
    }

    protected function imageUpload($imagePath, $code)
    {
        if (preg_match("/^[^\?]+\.(jpg|jpeg|gif|png)(?:\?|$)/", $imagePath)) {
            if (!file_exists('../public/nitro/c_images/album1584/' . $code)) {
                $this->file = new Upload();

                $this->file->setInput("imagesUpload");
                $this->file->setDestinationDirectory("../public/nitro/c_images/album1584/");
                $this->file->setUploadFunction("copy");
                $this->file->setAllowMimeType("image");
                $this->file->setFilename($code . '.gif');
                $this->file->save();

                if ($this->file->getStatus()) {
                    return true;
                }
            } else {
                return false;
            }
        }
        return false;
    }
}
