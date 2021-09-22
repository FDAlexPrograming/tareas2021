
{include file="templates/header.tpl"}

<h1>{$titulo}</h1>

    <ul>
        {foreach from=$tareas item=$tarea}
            <li class="{if $tarea->finalizado} finalizada {/if}">
               <a href="verTarea/{$tarea->id_tarea}">{$tarea->titulo}</a>:{$tarea->descripcion}
                <a href="borrarTarea/{$tarea->id_tarea}"> Borrar</a>
                <a href="actualizarTarea/{$tarea->id_tarea}">Finalizar</a>
            </li>
        {/foreach}
    </ul>

    <h2> Crear Tarea</h2>
    <form action="crearTarea" method="POST">
        <input type="text" name="titulo" id="titulo">
        <input type="text" name="descripcion" id="descripcion">
        <input type="number" name="prioridad" id="prioridad">
        <input type="checkbox" name="finalizar" id="finalizar">
        <input type="submit" value="Guardar"> 
    </form>

{include file="templates/footer.tpl"} 