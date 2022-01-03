<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Log;

use Core\View;
use Library\Upload;

class UploadImages
{
    private $file;

    public function view()
    {
        $dirUploads = '../public/uploads/';
        $dirImages = preg_grep('~\.(jpeg|jpg|png|gif)$~', scandir($dirUploads, SCANDIR_SORT_DESCENDING));
        $images = [];

        foreach ($dirImages as $file) {
            $images[filemtime($dirUploads . '/' . $file)] = $file;
        }

        View::renderTemplate('Admin/Upload/images.html',
            [
                'images' => $images,
                'permission' => 'housekeeping_ranks'
            ]
        );
    }

    public function add()
    {
        $imagePath = input()->file('imagesUpload')->filename;

        if (!empty($imagePath)) {
            if ($this->imageUpload($imagePath)) {
                Log::addStaffLog('-1', 'Ajout d\'une image', request()->player->id, 'upload');
                response()->json(["status" => "success", "message" => "Image upload avec succès!", "location" => "/housekeeping/upload/images"]);
            } else {
                response()->json(["status" => "error", "message" => "Une erreur est survenue lors de l'upload"]);
            }
        } else {
            response()->json(["status" => "error", "message" => "Merci de sélectionner un fichier à upload"]);
        }
    }

    protected function imageUpload($imagePath)
    {
        if (preg_match("/^[^\?]+\.(jpg|jpeg|gif|png)(?:\?|$)/", $imagePath)) {
            $this->file = new Upload();

            $this->file->setInput("imagesUpload");
            $this->file->setDestinationDirectory("../public/uploads/");
            $this->file->setUploadFunction("copy");
            $this->file->setAllowMimeType("image");
            $this->file->setAutoFilename();
            $this->file->save();

            if ($this->file->getStatus()) {
                return true;
            }
        }
        return false;
    }
}
