<?php
include_once 'controller/pizzaController.php';
include_once 'utils/parameters.php';

if (!isset($_GET['controller'])){
  header("Location:".base_url."pizza/index");
}else{
  $nombreController = $_GET['controller'].'Controller';
  if (class_exists($nombreController)){
    $controlador = new $nombreController();
    if (isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
      $action = $_GET['action'];
    }else{
      $action = 'index';
    }
    $controlador->$action();
    
  }else{
    header("Location:".base_url."pizza/index");
  }
  unset($_GET['controller']);
  unset($_GET['action']);
}
?>
