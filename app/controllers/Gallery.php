<?php

namespace App\controllers;
use App\models\Gallery as modelGallery;
use App\models\Pictures;
use Core\Render;

class Gallery extends Controller
{
    public function index()
    {
        $model = new modelGallery();
        $data['newKey'] = $model->index();
        Render::render('social/gallery.php', $data);

    }
    public function pictures()
    {
        $model = new Pictures();
        $data['newKey'] = $model->index();
        Render::render('social/pictures.php', $data);
    }

}