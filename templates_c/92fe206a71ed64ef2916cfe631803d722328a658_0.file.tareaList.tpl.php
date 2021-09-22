<?php
/* Smarty version 3.1.39, created on 2021-09-22 18:37:28
  from 'C:\xampp\htdocs\tareas2021\templates\tareaList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b5bc891cbc9_91723985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92fe206a71ed64ef2916cfe631803d722328a658' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tareas2021\\templates\\tareaList.tpl',
      1 => 1632328646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614b5bc891cbc9_91723985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tareas']->value, 'tarea');
$_smarty_tpl->tpl_vars['tarea']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tarea']->value) {
$_smarty_tpl->tpl_vars['tarea']->do_else = false;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['tarea']->value->finalizado) {?> finalizada <?php }?>">
               <a href="verTarea/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id_tarea;?>
"><?php echo $_smarty_tpl->tpl_vars['tarea']->value->titulo;?>
</a>:<?php echo $_smarty_tpl->tpl_vars['tarea']->value->descripcion;?>

                <a href="borrarTarea/<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id_tarea;?>
"> Borrar</a>
                <a href="actualizarTarea<?php echo $_smarty_tpl->tpl_vars['tarea']->value->id_tarea;?>
">Finalizar</a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <h2> Crear Tarea</h2>
    <form action="crearTarea" method="POST">
        <input type="text" name="titulo" id="titulo">
        <input type="text" name="descripcion" id="descripcion">
        <input type="number" name="prioridad" id="prioridad">
        <input type="checkbox" name="finalizar" id="finalizar">
        <input type="submit" value="Guardar"> 
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
