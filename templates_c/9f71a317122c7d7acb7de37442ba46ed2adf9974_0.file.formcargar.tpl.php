<?php
/* Smarty version 4.2.1, created on 2022-10-16 02:25:02
  from 'C:\xampp\htdocs\web2\repuestos\templates\formcargar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b4f5ea4a6f1_44956206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f71a317122c7d7acb7de37442ba46ed2adf9974' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\formcargar.tpl',
      1 => 1665879560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634b4f5ea4a6f1_44956206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="productos producto ">
  <div>
    <form action="<?php echo BASE_URL;?>
cargarproducto" method="GET">
      <div class="content-img-produc"><img src="<?php echo BASE_URL;?>
imagenes/cremallera_prueba.jpg" class="card-img-top"
          alt="cremayera"></div>
      <div class=" formnew"><label class="dato">Titulo:</label><input type="text" class="titulo" name="titulo" required>
      </div>
      <div class=" formnew"><label class="dato">MATERIAL:</label><input type="text" class="material" name="material"
          required></div>
      <div class="formnew"><label class="dato">PRECIO: $</label><input type="number" class="precio" name="precio"
          required></div>
      <div class="formnew "><label class="dato">Categoria:</label>

        <div class="selecform">
          <select name="categoria" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
            <option selected>seleccione una categoria</option>
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
      <button type="submit" class="btn btn-primary btn-comprar btn-guardar">Guardar</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
