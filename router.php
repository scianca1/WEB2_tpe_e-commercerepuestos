<?php 
require_once 'controler.repuestos.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action= "home";

if(!empty($_REQUEST['action'])){
    $action= $_REQUEST['action'];

}

$params= explode("/", $action);
$repuestoscontrolador= new controladorproductos();
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
    case'formlogin':
        $repuestoscontrolador->showcategoria($params[1]);
    break;

   default:
      
      echo "error en el switch ";
      
    break;
} 
