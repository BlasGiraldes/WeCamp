<?php

namespace Controllers;


use MVC\Router;

class RegalosController
{

    public static function index(Router $router)
    {
        if(!is_auth()) {
            header('Location: /');
            return;
        }
        $router->render('admin/regalos/index', [
            'titulo' => 'Regalos'
        ]);
    }
}