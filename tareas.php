<?php

function home(){

    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="'.BASE_URL.'"/;
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Tareas</title>
    </head>
    
        <h1>Tareas 2021</h1>
    
        <ul>
            <li>Tarea 1</li>
            <li>Tarea 2</li> 
            <li>Tarea 3</li>
        </ul>
    
        <form action="crearTarea" method="POST">
            <input type="text" name="titulo" id="titulo">
            <input type="text" name="descripcion" id="descripcion">
            <input type="number" name="prioridad" id="prioridad">
            <input type="checkbox" name="finalizar" id="finalizar">
            <input type="submit" value="Guardar">
            
        </form>
    <body>
    </body>
    </html>';

    echo $html;
}