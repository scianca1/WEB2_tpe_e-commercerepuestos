<?php
require_once 'usuarios.model.php';
require_once 'usuarios.vista.php';
require_once 'productos/categorias.modelo.php';

class usuarioscontroler {
    private $modelusuarios;
    private $viewusuarios;
    private $categorias;
    private $modelcategorias;
   


    function __construct(){
        $this->modelusuarios = new usuariosmodelo();
        $this->viewusuarios = new vistausuarios();
        $this->modelcategorias = new categoriamodelo();
        $this->categorias= $this->modelcategorias->getAllcategoria();
    }
    
    function showform(){
        $this->viewusuarios->showheader($this->categorias);
        $this->viewusuarios->showform();
    }
    function login(){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $usuario= $this->modelusuarios->getusuario($email);
        if((!empty($usuario)) && (password_verify($password,$usuario->contracenia))){
           session_start();
            $_SESSION['nombre']=$usuario->nombre;
            $_SESSION['email']=$usuario->email;
            $_SESSION['islogged']=true;
            header("location: ".BASE_URL."home");
        }
        else{
         $this->viewusuarios->showform("El EMAIL o la CONTRACEÑA no son correctos, vuelva a ingresarlos");
         die();
        }
    }
    function logaut(){
        session_start();
        session_destroy();
        header("location: home");

    }
}