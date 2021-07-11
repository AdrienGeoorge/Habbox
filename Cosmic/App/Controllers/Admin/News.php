<?php
namespace App\Controllers\Admin;

use App\Config;

use App\Helper;
use App\Models\Admin;
use App\Models\Log;
use App\Models\Player;

use Core\View;

use Library\Json;
use Library\Upload;
use stdClass;

class News
{
    private $data;
    private $file;

    public function __construct()
    {
        $this->data = new stdClass();
    }

    public function getnews()
    {
        $news = Admin::getNews();

        if (empty($news)) {
            response()->json(["status" => "error", "message" => "Nous n'avons pas trouvé d'articles"]);
        }

        foreach ($news as $row) {
            $row->author = Player::getDataById($row->author, 'username')->username ?? 'Management';
            $row->timestamp = date('d-M-Y H:i:s', $row->timestamp);
        }

        Json::filter($news, 'desc', 'id');
    }

    public function getcategorys()
    {
        $category = Admin::getNewsCategories();

        if (empty($category)) {
            response()->json(["status" => "error", "message" => "Nous n'avons pas pu trouver de catégories"]);
        }

        Json::filter($category, 'desc', 'id');
    }

    public function add()
    {
        $validate = request()->validator->validate([
            'title'         => 'required|max:50',
            'short_story'   => 'required|max:200',
            'full_story'    => 'required'
        ]);

        if(!$validate->isSuccess()) {
            return;
        }

        $id = input()->post('newsId')->value ?? 0;

        $title = input()->post('title')->value;
        $short_story = input()->post('short_story')->value;
        $full_story = input()->post('full_story')->value;
        $category = input()->post('category')->value;
        $images = input()->post('images')->value;
        $imagePath = input()->file('imagesUpload')->filename;

        if (!empty($imagePath)) {
            if ($this->imageUpload($imagePath)) {
                $imagePath = '/uploads/' . $this->file->getInfo()->filename;
            }
        } else {
            if ($id != 0) {
                $imagePath = Admin::getNewsById($id)->header;
            }
        }
      
        if ($id == 0) {
            Admin::addNews($title, $short_story, $full_story, $category, $imagePath, $images, request()->player->id);
            Log::addStaffLog('-1', 'Article posté: ' . $title, request()->player->id, 'news');
          
            response()->json(["status" => "success", "message" => "Nouvel article posté!"]);
        }

        Admin::editNews($id, $title, $short_story, $full_story, $category, $imagePath, $images, request()->player->id);
        Log::addStaffLog('-1', 'Article édité: ' . $title, request()->player->id, 'news');
      
        response()->json(["status" => "success", "message" => "Article édité avec succès!"]);
    }

    public function edit()
    {
        if (empty(input()->post('post')->value)) {
            response()->json(["status" => "error", "message" => "Nous n'avons pas pu trouver cet article"]);
        }

        $this->data->news = Admin::getNewsById(input()->post('post')->value);
        $this->data->category = Admin::getNewsCategories();
        echo Json::encode($this->data);
    }

    public function remove()
    {
        $news = Admin::removeNews(input()->post('post')->value);

        if (empty($news)) {
            response()->json(["status" => "error", "message" => "Nous n'avons pas pu trouver cet article"]);
        }

        Log::addStaffLog('-1', 'Article supprimé: ' . input()->post('post')->value, request()->player->id, 'news');
        response()->json(["status" => "success", "message" => "Article supprimé avec succès!"]);
    }

    public function addcategory()
    {
        $validate = request()->validator->validate([
            'post'          => 'required|max:50'
        ]);

        if(!$validate->isSuccess()) {
            exit;
        }

        Admin::addNewsCategory(input()->post('post')->value);
        Log::addStaffLog('-1', 'Catégorie d\'article ajoutée: ' . input()->post('post')->value, request()->player->id, 'news');
      
        response()->json(["status" => "success", "message" => "Catégorie ajoutée avec succès!"]);
    }

    public function editcategory()
    {
        $category = Admin::getNewsCategoryById(input()->post('post')->value);

        if (empty($category)) {
            response()->json(["status" => "error", "message" => "La catégorie n'existe pas!"]);
        }

        Log::addStaffLog('-1', 'Catégorie d\'article éditée: ' . $category->category . ' to ' .input()->post('post')->value, request()->player->id, 'news');
        Admin::editNewsCategory($category->id, input()->post('value')->value);
      
        response()->json(["status" => "success", "message" => "La catégorie a été éditée avec succès!"]);
    }

    public function removecategory()
    {
        $category = Admin::getNewsCategoryById(input()->post('post')->value);
        if (empty($category)) { 
            response()->json(["status" => "error", "message" => "La catégorie n'existe pas!"]);
        }

        Log::addStaffLog('-1', 'Catégorie d\'article supprimée: ' . $category->category, request()->player->id, 'news');
        Admin::removeNewsCategory($category->id);
      
        response()->json(["status" => "success", "message" => "La catégorie a été supprimée avec succès!"]);
    }

    public function view()
    {
        View::renderTemplate('Admin/Management/news.html', [
            'permission' => 'housekeeping_website_news'
        ]);
    }

    protected function imageUpload($imagePath)
    {
        if(preg_match("/^[^\?]+\.(jpg|jpeg|gif|png)(?:\?|$)/", $imagePath)) {
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
