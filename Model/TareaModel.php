<?php

class TareaModel{

    private $basededatos;

    function __construct(){
        $this->basededatos = new PDO('mysql:host=localhost;'.'dbname=basededatos_tareas;charse=utf8','root','');
    }
    
    function getTareas(){
        $sentencia = $this-> basededatos->prepare("select * from tareas");
        $sentencia->execute();
        $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $tareas;
      
    }

}