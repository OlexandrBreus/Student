<?php

namespace App\controllers;
use App\models\GalleryModel;
use App\models\PicturesModel;
use Core\Render;

class Gallery extends Controller
{
    public function index()
    {
        $model = new GalleryModel();
        $data['newKey'] = $model->index();
        Render::render('social/gallery.php', $data);

    }
    public function pictures()
    {
        $model = new PicturesModel();
        $data['newKey'] = $model->index();
        Render::render('social/pictures.php', $data);
    }

    public function addUser()
    {
        $data = [];
        if (!empty($_POST)){
            $model = new GalleryModel();
            $data = $model->addUser($_POST);
        }
                $this->render("social/registrationGallery.php", $data);
    }

    public function addUserPictures()
    {
        $data = [];
        if (!empty($_POST)){
            $model = new PicturesModel();
            $data = $model->addUser($_POST);
        }
                $this->render("social/registrationPictures.php", $data);
    }

}