<?php
require_once "basededatos.php";
require_once "tareas.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);


switch ($params[0]) {
    case 'home': 
        home();
        break;
        case 'crearTarea': 
            crearTarea();
            break;
        case 'borrarTarea': 
            borrarTarea($params[1]);
            break;
    default:
        echo '404 Page boy found';
        break;   
}
