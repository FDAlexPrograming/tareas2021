<?php

function getTareas(){
    $basededatos = new PDO('mysql:host=localhost;'.'dbname=basededatos_tareas;charse=utf8','root','');
    $sentencia = $basededatos->prepare("select * from tarea");
}