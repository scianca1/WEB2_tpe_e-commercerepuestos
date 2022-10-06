<?php 
 class repuestosmodelo {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8', 'root', '');
    }
    function getAll(){  
    $sentencia= $this->db->prepare("select * from productos");
    $sentencia->execute();
    $repuestos= $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $repuestos;
    }
    function getproduct($id){
        $sentencia= $this->db->prepare("select * from productos WHERE ID=?");
        $sentencia-> execute([$id]);
        $repuesto= $sentencia->fetch(PDO::FETCH_OBJ);
        return $repuesto;
    }

}