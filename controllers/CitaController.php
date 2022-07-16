<?php

namespace Controllers;

use MVC\Router;

class CitaController 
{
    public static function index(Router $router) {

        // session_start(); // no se necesita abrir otra vez la session porque la sesion solo se abre una sola vez

        isAuth();

        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}