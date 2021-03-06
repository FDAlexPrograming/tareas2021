<?php
require_once "Controller/TareaController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$tareaController = new TareaController();

$params = explode('/', $action);


switch ($params[0]) {
    case 'home': 
       $tareaController->home();
        break;
    case 'crearTarea': 
        $tareaController->crearTarea();
        break;
    case 'borrarTarea': 
        $tareaController->borrarTarea($params[1]);
        break;
    case 'actualizarTarea': 
        $tareaController->actualizarTarea($params[1]);
        break;
    case 'verTarea': 
        $tareaController->verTarea($params[1]);
        break;
    default:
        echo '404 Page noy found';
        break;   
}
