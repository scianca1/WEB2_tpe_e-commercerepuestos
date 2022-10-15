<?php
/* Smarty version 4.2.1, created on 2022-10-15 01:10:58
  from 'C:\xampp\htdocs\web2\repuestos\templates\formedit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349ec8227cc66_53257837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbe88e221644f502bc3b885ae38508f67eee6597' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\formedit.tpl',
      1 => 1665789055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6349ec8227cc66_53257837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class= "productos producto ">
    <div>
       <form action= "<?php echo BASE_URL;?>
editar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->ID;?>
" method="POST">
        <div class="content-img-produc"><img src="<?php echo BASE_URL;?>
imagenes/cremallera_prueba.jpg"class="card-img-top" alt="cremayera"></div>
        <div class= " formnew"><label class="dato">Titulo:</label><input value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
" type="text" class= "titulo" name="titulo" required></div>
        <div class= " formnew"><label class="dato">MATERIAL:</label><input value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->material;?>
"type="text" class= "material" name="material" required></div>
        <div class= "formnew"><label class="dato">PRECIO: $</label><input value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
"type="number"class= "precio" name="precio" required></div>
        <div class= "formnew "><label class="dato">Categoria:</label>
           
          <div class="selecform">  
            <select  name="categoria" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected><?php echo $_smarty_tpl->tpl_vars['categoriadelpr']->value->categoria;?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria;?>
</option>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
           </div> 
        </div>
        <button type="submit"  class="btn btn-primary btn-comprar btn-guardar">Guardar</button>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
