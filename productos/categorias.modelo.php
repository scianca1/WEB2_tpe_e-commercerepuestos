<?php
class categoriamodelo
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=web2;charset=utf8', 'root', '');
    }

    function getAllcategoria()
    {
        $sentencia = $this->db->prepare("select * from categorias");
        $sentencia->execute();
        $categorias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }
    function getcategoria($id)
    {
        $sentencia = $this->db->prepare("select * from categorias WHERE id=?");
        $sentencia->execute([$id]);
        $categoria = $sentencia->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }
    function insertcat($nombre)
    {
        $sentencia = $this->db->prepare("INSERT INTO categorias(categoria) VALUES(?)");
        $sentencia->execute([$nombre]);
    }
    function deletecat($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM categorias WHERE id=?");
        $sentencia->execute([$id]);
    }
    function updatecat($id, $nombre)
    {
        $sentencia = $this->db->prepare("UPDATE categorias SET categoria=? WHERE id=?");
        $sentencia->execute([$nombre, $id]);
    }
}
