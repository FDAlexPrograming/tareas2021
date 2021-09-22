{include file="templates/header.tpl"}

 <body>

    <h1>{$tarea->titulo}</h1>

    <h2>Descripcion: {$tarea->descripcion}</h2>
    <h2>Prioridad: {$tarea->prioridad}</h2>
    <h2>Finalizado: {$tarea->finalizado}</h2>
    <button><a href="home">Volver</a></button
</body>

{include file="templates/footer.tpl"}