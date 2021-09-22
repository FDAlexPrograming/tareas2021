<?php
require_once "./Model/TareaModel.php";
require_once "Vista/TareaVista.php";
class TareaController{

    private $model;
    private $vista;

    function __construct(){
        $this->model = new TareaModel();
        $this->vista = new TareaVista();
       
    }

    function home(){
       $tareas= $this->model->getTareas();
       $this->  vista->traerTareas($tareas);
    }

    function crearTarea(){
        if(!isset($_POST['finalizar'])){
            $finalizar = 0;
    
        }else{
            $finalizar = 1;
        }
        $this->model->insertarTarea($_POST['titulo'],$_POST['descripcion'],$_POST['prioridad'],$finalizar);
        $this->vista->homeLocation();
    }

    function borrarTarea($id){
        $this->model->borrarTareaBaseDeDatos($id);
        $this->vista->homeLocation();
        
    }

    function  actualizarTarea($id){
        $this->model->actualizarTareaBaseDeDatos($id);
        $this->vista->homeLocation();
    }

    function verTarea($id){
        $tarea =  $this->model->getTarea($id);
        echo  '<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="'.BASE_URL.'"/;
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Tareas</title>
        </head>
        <body>
     
            <h1>'.$tarea->titulo.'</h1>
            <h2>'."Descripcion: ".$tarea->descripcion.'</h2>
            <h2>'."Prioridad: ".$tarea->prioridad.'</h2>
            <h2>'."Finalizado: ".$tarea->finalizado.'</h2>
            </body>
            </html>';
     }
   
}