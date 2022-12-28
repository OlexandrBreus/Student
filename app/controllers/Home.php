<?php

namespace App\controllers;

use App\models\Contacts;
use Core\Render;

class Home extends Controller
{
    public function index()
    {
        Render::render('social/home.php');

    }
    public function contacts()
    {
        $model = new Contacts();
        $data['newKey'] = $model -> index();
        Render::render('social/contacts.php', $data);
    }
}