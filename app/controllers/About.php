<?php

namespace App\controllers;
use App\models\About as modelAbout;
use App\models\History;
use Core\Render;

class About
{
    public function index()
    {
        $model = new modelAbout();
        $data['newKey'] = $model->index();
        Render::render('social/about.php', $data);

    }
    public function history()
    {
        $model = new History();
        $data['newKey'] = $model->index();
        Render::render('social/history.php', $data);
    }
}