<?php
require_once "Model/TareaModel.php";
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
   
}