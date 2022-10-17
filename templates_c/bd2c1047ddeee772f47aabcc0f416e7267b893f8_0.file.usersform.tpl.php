<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:14:41
  from 'C:\xampp\htdocs\web2\repuestos\templates\usersform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc5c13514b4_75155714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd2c1047ddeee772f47aabcc0f416e7267b893f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\repuestos\\templates\\usersform.tpl',
      1 => 1666038250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634dc5c13514b4_75155714 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="productos producto formuser ">
    <div>
        <h1>INICIO DE SECCION</h1>
    </div>
    <div>
        <form class="row g-3" action="<?php echo BASE_URL;?>
login" method="POST">
            <div class="col-auto">

                <input name="email" type="email" class="form-control" id="inputPassword2"
                    placeholder="correo electronico" required>
            </div>
            <div class="col-auto">

                <input name="password" type="password" class="form-control" id="inputPassword2" placeholder="contraseña"
                    required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">iniciar</button>
            </div>
        </form>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div>
            <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
        </div>
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
