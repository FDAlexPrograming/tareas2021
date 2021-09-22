<?php
require_once "libreria/smarty-3.1.39/libs/Smarty.class.php";

class TareaVista{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function traerTareas($tareas){
        $this->smarty->assign('titulo',"Lista de Tareas");
        $this->smarty->assign('tareas',$tareas);
        $this->smarty->display("templates/tareaList.tpl");
    }

    function homeLocation(){
        header("Location:".BASE_URL."/home");
    }

    function verUnaTarea($tarea){
        $this->smarty->assign('tarea',$tarea);
        $this->smarty->assign('titulo',"Detalle de la Tarea");
        $this->smarty->display("templates/detalleTarea.tpl");
     }
}