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
    <body>
        <h1>Tareas 2021</h1>
    
        <ul>';
            $tareas = getTareas();
                foreach($tareas as $tarea){
                    $html .= '<li>'.$tarea->titulo.':'.$tarea->descripcion.' - '.'<a href="borrarTarea/'.$tarea->id_tarea.'"> Borrar</a>'.'</li>';
                }
            $html .=  '
        </ul>
    
        <form action="crearTarea" method="POST">
            <input type="text" name="titulo" id="titulo">
            <input type="text" name="descripcion" id="descripcion">
            <input type="number" name="prioridad" id="prioridad">
            <input type="checkbox" name="finalizar" id="finalizar">
            <input type="submit" value="Guardar">
            
        </form>
  
    </body>
    </html>';
            
    echo $html;
}

function crearTarea(){
    if(!isset($_POST['finalizar'])){
        $finalizar = 0;

    }else{
        $finalizar = 1;
    }
    insertarTarea($_POST['titulo'],$_POST['descripcion'],$_POST['prioridad'],$finalizar); // nombres del form
    header("Location: home");
}

function borrarTarea($id){
    borrarTareaBaseDeDatos($id);
    header("Location: ".BASE_URL."/home");
    
}
  