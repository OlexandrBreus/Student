<?php

namespace App\controllers;

use App\models\AboutModel;
use App\models\HistoryModel;
use Core\Render;

class About extends Controller
{
    public function index()
    {
        $model = new AboutModel();
        $data['newKey'] = $model->index();
        Render::render('social/about.php', $data);

    }
    public function history()
    {
        $model = new HistoryModel();
        $data['newKey'] = $model->index();
        Render::render('social/history.php', $data);
    }

    public function addUser()
    {
        $model = new AboutModel();
        $model->addUser($_POST);
        $this->render("social/registrationAbout.php", $data);
    }

    public function addUserHistory()
    {
        $model = new HistoryModel();
        $data = $model->addUser($_POST);
        $this->render("social/registrationHistory.php", $data);
    }
}