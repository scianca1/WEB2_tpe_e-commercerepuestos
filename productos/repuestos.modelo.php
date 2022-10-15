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
    function getcategoria($id){
         $sentencia= $this->db->prepare("select * from productos WHERE id_categoria_fk=?");
         $sentencia->execute([$id]);
         $repuestosdecat=$sentencia->fetchAll(PDO::FETCH_OBJ);
         return $repuestosdecat;
    }
    function deleteproducto($id){
        $sentencia= $this->db->prepare("DELETE FROM productos WHERE ID=?");
        $sentencia->execute([$id]);
         }
    function insertproduct($producto,$material,$precio,$categoria){
        $sentencia= $this->db->prepare("INSERT INTO productos(producto,material,precio,id_categoria_fk) VALUES(?,?,?,?)");
        $sentencia->execute([$producto,$material,$precio,$categoria]);
    }
    function editproducto($titulo,$material,$precio,$id_categoria,$id){
        $sentencia= $this->db->prepare("UPDATE productos SET material=?,precio=?,producto=?,id_categoria_fk=? WHERE ID=?");
        $sentencia->execute([$material,$precio,$titulo,$id_categoria,$id]);
    }
    
    
    
}