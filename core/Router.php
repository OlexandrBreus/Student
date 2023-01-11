<?php

namespace Core;
use App\controllers\Error404;

class Router
{
    public function run()
    {
        $url = !empty($_SERVER["REDIRECT_URL"]) ? $_SERVER["REDIRECT_URL"] : '/';
        $config = require '../config/routes.php';
        if (array_key_exists($url, $config)) {
            $q = explode('@', $config[$url]);
            $className = $q[0];
            $methodName = $q[1];
        }else{
            $className = 'Error404';
            $methodName = 'index';
        }
        $className = 'App\controllers\\' . $className;

        if (class_exists($className)) {
            $classObj = new $className;
        } else {
            $classObj = new Error404();
        }

        if (method_exists($classObj, $methodName)) {
            $classMethod = $methodName;
        } else {
            $classMethod = 'index';
        }
        $classObj->$classMethod();
    }
}

