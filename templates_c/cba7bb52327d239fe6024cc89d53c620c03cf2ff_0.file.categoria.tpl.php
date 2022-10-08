<?php
/* Smarty version 4.2.1, created on 2022-10-07 19:25:52
  from 'C:\xampp\htdocs\web2\repuestos\templates\categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63406120f22c96_62918783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba7bb52327d239fe6024cc89d53c620c03cf2ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\categoria.tpl',
      1 => 1665163550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63406120f22c96_62918783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class= "categoria"><?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>
</h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
 <div class= "card " >
 <div class="content-img-produc"><img src="<?php echo BASE_URL;?>
imagenes/cremallera_prueba.jpg"class="card-img-top" alt="cremayera"></div>
  <div class="card-body">
  
     <h2 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</h2>
     <p class="card-text">$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</p>
     <a href= "<?php echo BASE_URL;?>
verunproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->ID;?>
"  class="btn btn-primary">ver Producto</a>
  </div>
 </div>
 
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
