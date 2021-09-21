<?php


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
       <h2>'."Descripcion: ".$tarea->descripcion.'</h2>
       <h2>'."Prioridad: ".$tarea->prioridad.'</h2>
       <h2>'."Finalizado: ".$tarea->finalizado.'</h2>
       </body>
       </html>';
}
  