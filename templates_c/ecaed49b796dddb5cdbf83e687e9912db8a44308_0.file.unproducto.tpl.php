<?php
/* Smarty version 4.2.1, created on 2022-10-16 01:17:06
  from 'C:\xampp\htdocs\web2\repuestos\templates\unproducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b3f721dc1c2_98451552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecaed49b796dddb5cdbf83e687e9912db8a44308' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\unproducto.tpl',
      1 => 1665875735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634b3f721dc1c2_98451552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="productos producto ">
    <div>
        <?php if ((isset($_SESSION['nombre']))) {?>
            <a href="<?php echo BASE_URL;?>
iraeditar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->ID;?>
" type="button" class="btn btn-warning">Editar este producto</a>
            <a href="<?php echo BASE_URL;?>
borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->ID;?>
" type="button" class="btn btn-outline-danger">Borrar este producto</a>
        <?php }?>
        <div class="content-img-produc"><img src="<?php echo BASE_URL;?>
imagenes/cremallera_prueba.jpg" class="card-img-top"
                alt="cremayera"></div>
        <h2><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</h2>

        <div class="material"><label>MATERIAL:</label>
            <h3><?php echo $_smarty_tpl->tpl_vars['producto']->value->material;?>
</h3>
        </div>
        <div class="precio"><label>PRECIO:</label>
            <h3>$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</h3>
        </div>
            </div>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
