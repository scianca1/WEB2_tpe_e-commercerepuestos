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
    function showheader($categorias){
      $this->smarty->assign('categorias',$categorias);
      }
    function showproducto($producto){
      $this->smarty->assign('producto',$producto);
      $this->smarty->display('templates/unproducto.tpl');
     }
     function showcategoria($productos,$categoria){
       $this->smarty->assign('productos',$productos);
       $this->smarty->assign('categoria',$categoria);
       $this->smarty->display('templates/categoria.tpl');
     }
     function showformcargar(){
       $this->smarty->display('templates/formcargar.tpl');
     } 
     function insertado($producto){
       $this->smarty->assign('titulo',$producto);
       $this->smarty->display('templates/insertado.tpl');
     }
     function seborro($producto){
      $this->smarty->assign('producto',$producto);
      $this->smarty->display('templates/borrado.tpl');
     }
     function showformedit($producto,$categoriadelpr){
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categoriadelpr',$categoriadelpr);
        $this->smarty->display('templates/formedit.tpl');
     }
     function showadmincat(){
      $i=1;
      $this->smarty->assign('i',$i);
      $this->smarty->display('templates/admincat.tpl');
     }
     function showformeditcat($categoria,$i){
      $this->smarty->assign('i',$i);
      $this->smarty->assign('categoria',$categoria);
      $this->smarty->display('templates/formeditcat.tpl');
     }
    function showgoborrar($categoria,$productosdecate){
      $this->smarty->assign('categoria',$categoria);
      $this->smarty->assign('numerodeproductos',count($productosdecate));
      $this->smarty->display('templates/goborrarproducto.tpl');

    }
   
}