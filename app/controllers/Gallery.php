<?php

namespace App\controllers;

class Gallery
{
    public function index()
    {
        echo 'Our gallery';
    }
    public function pictures()
    {
        echo '<pre>';
        echo 'Last party pictures';
        echo '</pre>';
    }
}