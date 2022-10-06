<?php 
require_once './libs/smarty-4.2.1/smarty-4.2.1/libs/Smarty.class.php';
 class vistaproductos {
   private $smarty;

   function __construct(){
       $this->smarty = new Smarty();
    }
    function showproducts($productos){
      
        $this->smarty->assign('productos',$productos);
        $this->smarty->display('templates/productos.tpl');

    }
    function showproducto($producto){
      $this->smarty->assign('producto',$producto);
      $this->smarty->display('templates/unproducto.tpl');
     }
}