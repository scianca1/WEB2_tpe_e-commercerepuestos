<?php 
require_once 'productos/controler.repuestos.php';
require_once 'usuarios/controler.usuarios.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action= "home";

if(!empty($_REQUEST['action'])){
    $action= $_REQUEST['action'];

}

$params= explode("/", $action);
$repuestoscontrolador= new controladorproductos();
$usuarioscontrolador= new usuarioscontroler();
switch ($params[0]){
   case 'home':
        $repuestoscontrolador->showhome();
    break;
   case'verunproducto':
        $repuestoscontrolador->showproducto($params[1]);
    break;
    case'borrar':
        $repuestoscontrolador->borrarproducto($params[1]);
    break;
    case'iraeditar':
        $repuestoscontrolador->iraeditarproducto($params[1]);
    break;
    case'editar':
        $repuestoscontrolador->editarproducto($params[1]);
    break;
    case'iracargarnuevopr':
        $repuestoscontrolador->iracargarpr();
    break;
    case'cargarproducto':
        $repuestoscontrolador->cargarpr();
    break;
    case'categoria':
        $repuestoscontrolador->showcategoria($params[1]);
    break;
    case'admincat':
        $repuestoscontrolador->admincat();
    break;
    case'addcategoria':
        $repuestoscontrolador->addcat();
    break;
    case'borrarcat':
        $repuestoscontrolador->borrarcategoria($params[1]);
    break;
    case'goeditarcat':
        $repuestoscontrolador->goeditarcat($params[1],$params[2]);
    break;
    case'editarcat':
        $repuestoscontrolador->editarcat($params[1]);
    break;


    case'formlogin':
        $usuarioscontrolador->showform();
    break;
    case'login':
        $usuarioscontrolador->login();
    break;
    case'logaut':
        $usuarioscontrolador->logaut();
    break;

   default:
      
      echo "error en el switch ";
      
    break;
} 
