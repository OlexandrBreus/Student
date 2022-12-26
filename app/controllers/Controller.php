<?php

namespace App\controllers;
use Core\Render;
class Controller
{
    protected function render(string $viewName): void
    {
        Render::render($viewName);
    }

}