<?php
class usuariosmodelo {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    }
    function getusuario($email){
        $sentencia=$this->db->prepare("select * from usuarios WHERE email=?");
        $sentencia-> execute([$email]);
        $usuario= $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

}