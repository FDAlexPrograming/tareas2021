<?php
/* Smarty version 3.1.39, created on 2021-09-22 18:37:30
  from 'C:\xampp\htdocs\tareas2021\templates\detalleTarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b5bca738986_55911958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e89ddfeeec0d0cd335a8867f582e026af941d7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tareas2021\\templates\\detalleTarea.tpl',
      1 => 1632328370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614b5bca738986_55911958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <body>

    <h1><?php echo $_smarty_tpl->tpl_vars['tarea']->value->titulo;?>
</h1>

    <h2>Descripcion: <?php echo $_smarty_tpl->tpl_vars['tarea']->value->descripcion;?>
</h2>
    <h2>Prioridad: <?php echo $_smarty_tpl->tpl_vars['tarea']->value->prioridad;?>
</h2>
    <h2>Finalizado: <?php echo $_smarty_tpl->tpl_vars['tarea']->value->finalizado;?>
</h2>
    <button><a href="home">Volver</a></button
</body>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
