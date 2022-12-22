<?php

namespace Core;
use App\controllers\Error404;

class Router
{
    public function run()
    {
      /*  echo '<pre>';
        var_dump($_SERVER["REQUEST_URI"]);
        echo '</pre>';
        $home = new Home();
        $error404 = new Error404();
        $home->index();
        $error404->index();
    */
        $arr = explode('/', $_SERVER["REQUEST_URI"]);
        if (empty($arr[1])){
            $arr[1] = 'home';
        }
        $className = 'App\controllers\\'. ucfirst($arr[1]);
        if (class_exists($className)){
            $classObj = new $className;
        }else{
            $classObj = new Error404();
        }
        $classObj->index();

        if (!empty($arr[2])) {
            $a = ucfirst($arr[2]);
            if (method_exists($classObj, $a)) {
                $classObj->$a();
            } else {
                $classObj = new Error404();
                $classObj->index();
            }
        }


      }
}
