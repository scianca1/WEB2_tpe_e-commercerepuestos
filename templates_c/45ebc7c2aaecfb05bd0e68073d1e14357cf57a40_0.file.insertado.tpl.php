<?php
/* Smarty version 4.2.1, created on 2022-10-09 21:23:22
  from 'C:\xampp\htdocs\web2\repuestos\templates\insertado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63431faa9c1ec4_49701537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ebc7c2aaecfb05bd0e68073d1e14357cf57a40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\insertado.tpl',
      1 => 1665343399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63431faa9c1ec4_49701537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
 <a href="<?php echo BASE_URL;?>
home" class="btn btn-primary btn-comprar">volver al inicio</a> 
</div>
<div class=" categoria insertado"><h1> Tu producto <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 Fue ingresado correctamente </h1></div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
