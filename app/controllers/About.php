<?php

namespace App\controllers;

class About
{
    public function index()
    {
        echo 'About us';
    }
    public function history()
    {
        echo '<pre>';
        echo 'Our history';
        echo '</pre>';
    }
}