<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use App\Models\Log;

use Core\View;
use Library\Upload;

class Event
{
    private $file;

    public function view()
    {
        $datas = Admin::getEventDatas();
        $event = [];

        foreach ($datas as $data) {
            $event[$data->key] = $data->value;
        }

        View::renderTemplate('Admin/event.html',
            [
                'data' => $event,
                'permission' => 'housekeeping_ranks'
            ]
        );
    }

    public function edit()
    {
        $description = input()->post('event_description')->value;
        $link = input()->post('event_link')->value;
        $show = (bool)filter_var(input('event_show'), FILTER_VALIDATE_BOOLEAN);
        $imagePath = input()->file('imagesUpload')->filename;

        if (!empty($imagePath)) {
            if ($this->imageUpload($imagePath)) {
                $imagePath = '/uploads/' . $this->file->getInfo()->filename;
            }
        }

        Admin::editEvent($description, $link, $imagePath, $show);
        Log::addStaffLog('-1', 'Infos évènement mises à jour', request()->player->id, 'event');

        response()->json(["status" => "success", "message" => "Evènement mis à jour avec succès!"]);
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
