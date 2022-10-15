<?php
/* Smarty version 4.2.1, created on 2022-10-14 22:51:20
  from 'C:\xampp\htdocs\web2\repuestos\templates\admincat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349cbc86c6f51_90341694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0f89f9e309b97e52551472864c2b249f6a3b442' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\admincat.tpl',
      1 => 1665780134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6349cbc86c6f51_90341694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class= "categoria">Administrar Categorias</h1>

<div class="productos tableadmincat">
<table class="table table-dark table-hover">
  <thead>
  <tr>
  <td colspan="2">Todas tus Categorias</td>
  </tr>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col" class="tdadmincat">Nombre</th>
      <th scope="col" class="tdadmincat">Editar categoria</th>
      <th scope="col" class="tdadmincat">Borrar categoria</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    <tr>
      <th scope="row"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</th>
      <td class="tdadmincat"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria;?>
</td>
      <td class="tdadmincat"><a href="<?php echo BASE_URL;?>
goeditarcat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"type="button" class="btn btn-warning">Editar </a></td>
      <td class="tdadmincat"><a href="<?php echo BASE_URL;?>
borrarcat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"type="button" class="btn btn-outline-danger">Borrar </a></td>
     </tr>
    <p class="hidden"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</p>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

  </tbody>
</table>
</div>
<div class="formaddcat ">
    <h2>Crear una nueva categoria</h2>
     <form action= "<?php echo BASE_URL;?>
addcategoria" method="POST">
        <div class= " formnew"><label class="dato">nombre de la categoria:</label><input  type="text" class= "titulo" name="nombre" required></div>
        <button type="submit"  class="btn btn-primary btn-comprar btn-guardar">añadir</button>
        </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
