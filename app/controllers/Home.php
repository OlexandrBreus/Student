<?php

namespace App\controllers;

use App\models\ContactsModel;
use App\models\HomeModel;
use Core\Render;

class Home extends Controller
{
    public function index()
    {
        Render::render('social/home.php');

    }
    public function contacts()
    {
        $model = new ContactsModel();
        $data['newKey'] = $model -> index();
        Render::render('social/contacts.php', $data);
    }

    public function addUser()
    {
        $model = new HomeModel();
        $data = $model->addUser($_POST);
        $this->render("social/registrationHome.php", $data);
    }

    public function addUserContacts()
    {
        $model = new ContactsModel();
        $data = $model->addUserContacts($_POST);
        $this->render("social/registrationContacts.php", $data);
    }
}