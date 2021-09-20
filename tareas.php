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
                    if($tarea->finalizado ==1){
                        $html .= '<li> <strike>'.$tarea->titulo.':'.$tarea->descripcion.' - '.'<a href="borrarTarea/'.$tarea->id_tarea.'"> Borrar</a> - <a href="actualizarTarea/'.$tarea->id_tarea.'">Finalizar</a>'.'</strike></li>';
                    }else{
                        $html .= '<li> <a href="verTarea/'.$tarea->id_tarea.'">'.$tarea->titulo.'</a>:'.$tarea->descripcion.' - '.'<a href="borrarTarea/'.$tarea->id_tarea.'"> Borrar</a> - <a href="actualizarTarea/'.$tarea->id_tarea.'">Finalizar</a>'.'</li>';
                    }
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
    header("Location:".BASE_URL."/home");
}

function borrarTarea($id){
    borrarTareaBaseDeDatos($id);
    header("Location: ".BASE_URL."/home");
    
}

function  actualizarTarea($id){
    actualizarTareaBaseDeDatos($id);
    header("Location: ".BASE_URL."/home");
}

function verTarea($id){
   $tarea = getTarea($id);
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
       <h2>'.$tarea->descripcion.'</h2>
       <h2>'.$tarea->prioridad.'</h2>
       <h2>'.$tarea->finalizado.'</h2>
       </body>
       </html>';
}
  