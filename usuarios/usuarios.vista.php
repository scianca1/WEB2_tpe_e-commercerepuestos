<?php
class vistausuarios
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function showheader($categorias)
    {
        $this->smarty->assign('categorias', $categorias);
    }

    function showform($error = null)
    {
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/usersform.tpl');
    }
}
