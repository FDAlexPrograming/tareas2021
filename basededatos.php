<?php

function conectar(){
    return new PDO('mysql:host=localhost;'.'dbname=basededatos_tareas;charse=utf8','root','');
}
function getTareas(){
    $basededatos = conectar();
    $sentencia = $basededatos->prepare("select * from tareas");
    $sentencia->execute();
    $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $tareas;
  
}

function insertarTarea($nombre,$descripcion,$prioridad,$finalizado){
    $basededatos = conectar();
    $sentencia = $basededatos->prepare(
        "INSERT INTO tareas(titulo, descripcion, prioridad, finalizado) /* nombre de la base de datos */        VALUES(?,?,?,?)");
    $sentencia->execute(array($nombre,$descripcion,$prioridad,$finalizado));   

}

function   borrarTareaBaseDeDatos($id){
    $basededatos = conectar();
    $sentencia = $basededatos->prepare("DELETE FROM tareas WHERE id_tarea=?");
    $sentencia->execute(array($id));   

}

function actualizarTareaBaseDeDatos($id){
    $basededatos = conectar();
    $sentencia = $basededatos->prepare("UPDATE tareas SET finalizado=1 WHERE id_tarea=?");
    $sentencia->execute(array($id));   

}

function getTarea($id){
    $basededatos = conectar();
    $sentencia = $basededatos->prepare("select * from tareas WHERE id_tarea=?");
    $sentencia->execute(array($id));   
    $tarea = $sentencia->fetch(PDO::FETCH_OBJ);
    return $tarea;
}