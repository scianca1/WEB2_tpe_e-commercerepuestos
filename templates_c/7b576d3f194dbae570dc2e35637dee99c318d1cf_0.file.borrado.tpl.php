<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:16:46
  from 'C:\xampp\htdocs\web2\repuestos\templates\borrado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc63ee6f3c7_83386943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b576d3f194dbae570dc2e35637dee99c318d1cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\borrado.tpl',
      1 => 1666038178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634dc63ee6f3c7_83386943 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class=" categoria insertado">
    <h1> Tu producto <?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
 Fue ELIMINADO correctamente </h1>
</div>
<div>
    <a href="<?php echo BASE_URL;?>
home" class="btn btn-primary btn-comprar">volver al inicio</a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
