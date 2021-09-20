<?php

function getTareas(){
    $basededatos = new PDO('mysql:host=localhost;'.'dbname=basededatos_tareas;charse=utf8','root','');
    $sentencia = $basededatos->prepare("select * from tareas");
    $sentencia->execute();
    $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $tareas;
  
}

function insertarTarea($nombre,$descripcion){
    $basededatos = new PDO('mysql:host=localhost;'.'dbname=basededatos_tareas;charse=utf8','root','');
    $sentencia = $basededatos->prepare(
        "INSERT INTO tareas(titulo, descripccion, prioridad, finalizado)
         VALUES(?,?,?,?)");
    
}