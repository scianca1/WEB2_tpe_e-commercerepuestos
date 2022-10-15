<?php
require_once 'repuestos.modelo.php';
require_once 'repuestos.vista.php';
require_once 'apps/herper.php';
require_once 'productos/categorias.modelo.php';

 class controladorproductos {

    private $modelproducts;
    private $modelcategorias;
    private $viewproducts;
    private $helper;
    private $categorias;
    private $productos;
    
    function __construct(){
        $this->modelproducts = new repuestosmodelo();
        $this->viewproducts = new vistaproductos();
        $this->helper =new helper() ;
        $this->modelcategorias = new categoriamodelo();
        $this->categorias= $this->modelcategorias->getAllcategoria();
        $this->productos= $this->modelproducts->getAll();
    }
    function showhome(){
            session_start();
            $this->viewproducts->showheader($this->categorias);
            $this->viewproducts->showproducts($this->productos);
    }
    function showproducto($id){
        session_start();
        $producto= $this ->modelproducts->getproduct($id);
        $this->viewproducts->showheader($this->categorias);
        $this->viewproducts->showproducto($producto);
    }
    function showcategoria($id){
        session_start();
        $this->viewproducts->showheader($this->categorias);
        $cate= $this->modelproducts->getcategoria($id);
        $categoria= $this->modelcategorias->getcategoria($id);
        $this->viewproducts->showcategoria($cate,$categoria);
    }
    function borrarproducto($id){
        $this->helper->checklogged();
        $producto= $this ->modelproducts->getproduct($id);
        $this->modelproducts->deleteproducto($id);
        $this->viewproducts->seborro($producto);
    }
    function iracargarpr(){
        session_start();
        $this->viewproducts->showheader($this->categorias);
        $this->viewproducts->showformcargar();
    }
    function cargarpr(){
        $this->viewproducts->showheader($this->categorias);
        $this->helper->checklogged();
        $producto= $_GET['titulo'];
        $material= $_GET['material'];
        $precio= $_GET['precio'];
        $categoria= $_GET['categoria'];
        $this->modelproducts->insertproduct($producto,$material,$precio,$categoria);
        $this->viewproducts->insertado($producto);
    }
    function iraeditarproducto($id) {
        $this->helper->checklogged();
        $this->viewproducts->showheader($this->categorias);
        $producto= $this->modelproducts->getproduct($id);
        $categoriadelproducto= $this->modelcategorias->getcategoria($producto->id_categoria_fk);
        $this->viewproducts->showformedit($producto,$categoriadelproducto);
    }
    function editarproducto($id){
        $this->helper->checklogged();
        if(!empty($_POST['titulo'] && $_POST['material'] && $_POST['precio'] && $_POST['categoria'])){
            $titulo=$_POST['titulo'];
            $material=$_POST['material'];
            $precio=$_POST['precio'];
            $id_categoria=$_POST['categoria'];
            $this->modelproducts->editproducto($titulo,$material,$precio,$id_categoria,$id);
            header("location: ".BASE_URL."home");
        }
    }
    function admincat(){
        session_start();
        $this->viewproducts->showheader($this->categorias);
        $this->viewproducts->showadmincat();
    }
    function addcat(){
        $this->helper->checklogged();
        $nombre= $_POST['nombre'];
        $this->modelcategorias->insertcat($nombre);
        header("location: ".BASE_URL."admincat");
    }
    function borrarcategoria($id){
        $this->helper->checklogged();
        $this->modelcategorias->deletecat($id);
        header("location: ".BASE_URL."admincat");
    }
    function goeditarcat($id,$i){
        $this->helper->checklogged();
        $this->viewproducts->showheader($this->categorias);
        $categoria=$this->modelcategorias->getcategoria($id);
        $this->viewproducts->showformeditcat($categoria,$i);
    }
    function editarcat($id){
        $nombre=$_POST['nombre'];
        $this->modelcategorias->updatecat($id,$nombre);
        header("location: ".BASE_URL."admincat");
    }

    

   
}