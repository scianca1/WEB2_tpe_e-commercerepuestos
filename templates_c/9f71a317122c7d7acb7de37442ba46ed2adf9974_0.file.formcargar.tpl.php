<?php
/* Smarty version 4.2.1, created on 2022-10-09 19:50:23
  from 'C:\xampp\htdocs\web2\repuestos\templates\formcargar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634309dfbe4eb1_80043383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f71a317122c7d7acb7de37442ba46ed2adf9974' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\formcargar.tpl',
      1 => 1665337792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634309dfbe4eb1_80043383 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class= "productos producto ">
    <div>
       <form action= "<?php echo BASE_URL;?>
cargarproducto" method="GET">
        <div class="content-img-produc"><img src="<?php echo BASE_URL;?>
imagenes/cremallera_prueba.jpg"class="card-img-top" alt="cremayera"></div>
        <div class= " formnew"><label class="dato">Titulo:</label><input  type="text" class= "titulo" name="titulo" required></div>
        <div class= " formnew"><label class="dato">MATERIAL:</label><input type="text" class= "material" name="material" required></div>
        <div class= "formnew"><label class="dato">PRECIO: $</label><input type="number"class= "precio" name="precio" required></div>
        <div class= "formnew"><label class="dato">Categoria:</label>
           
            <select  name="categoria" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                <option selected>seleccione una categoria</option>
                <option value="Cremalleras">Cremalleras</option>
                <option value="Bombas">Bombas</option>
                <option value="Retenes">Retenes</option>
                <option value="Bujes">Bujes</option>
                <option value="Extremos">Extremos</option>
            </select>
        </div>
        <button type="submit"  class="btn btn-primary btn-comprar">Guardar</button>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
