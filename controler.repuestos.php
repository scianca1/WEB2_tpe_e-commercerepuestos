<?php
require_once 'repuestos.modelo.php';
require_once 'repuestos.vista.php';
 class controladorproductos {

    private $modelproducts;
    private $viewproducts; 
    function __construct(){
        $this->modelproducts = new repuestosmodelo();
        $this->viewproducts = new vistaproductos();
    }
   
    function showhome(){
        $productos= $this->modelproducts->getAll();
        $this->viewproducts->showproducts($productos);    
    }
    function showproducto($id){
        $producto= $this ->modelproducts->getproduct($id);
        $this->viewproducts->showproducto($producto);
    }
    function showcategoria($categoria){
        $cate= $this->modelproducts->getcategoria($categoria);
        $this->viewproducts->showcategoria($cate,$categoria);
    }
    function borrarproducto($id){
        $producto= $this ->modelproducts->getproduct($id);
        $this->modelproducts->deleteproducto($id);
        $this->viewproducts->seborro($producto);
        
    }
    function iracargarpr(){
        $this->viewproducts->formcargar();
    }
    function cargarpr(){
        $producto= $_GET['titulo'];
        $material= $_GET['material'];
        $precio= $_GET['precio'];
        $categoria= $_GET['categoria'];
        $this->modelproducts->insertproduct($producto,$material,$precio,$categoria);
        $this->viewproducts->insertado($producto);
    }
    function editarproducto($id) {
        
    }

   
}