<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:25:00
  from 'C:\xampp\htdocs\web2\repuestos\templates\formeditcat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d3ac31b7e4_46801556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27b30bbe074ad1c063262c62ae59e7f876fddc90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\formeditcat.tpl',
      1 => 1665782624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6349d3ac31b7e4_46801556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class= "categoria">Editar Categoria</h1>
<form action="<?php echo BASE_URL;?>
editarcat/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" method="POST">
<div class="productos tableadmincat">
<table class="table table-dark table-hover">
  <thead>
  <tr>
  <td colspan="2">Tu Categoria numero</td>
  </tr>
   <tr>
      <th scope="col">#</th>
      <th scope="col" class="tdadmincat">Nombre</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</th>
      <td class="tdadmincat"><input value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->categoria;?>
" name="nombre"></td>
   </tr>
</tbody>
</table>
</div>
<button type="submit"  class="btn btn-primary btn-comprar btn-guardar">Guardar los Cambios</button>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
