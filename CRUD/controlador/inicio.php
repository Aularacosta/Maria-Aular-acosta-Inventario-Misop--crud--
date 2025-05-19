<?php

require_once "modelo/producto.php";
$obj_producto = new Producto();

// print_r($_POST);


if(isset($_POST['eliminar'])){ 
  $obj_producto->set_codigo($_POST['eliminar']);
  $obj_producto->eliminar();
}

if(isset($_POST['seleccionar'])){ 

  $obj_producto->set_codigo($_POST['seleccionar']);
  $modificar_producto = $obj_producto->buscar();

}

if(isset($_POST['modificar'])){ 

  $obj_producto->set_codigo($_POST['codigo']);
  $obj_producto->set_nombre($_POST['nombre']);
  $obj_producto->set_descripcion($_POST['descripcion']);
  $obj_producto->set_precio($_POST['precio']);

  $obj_producto->modificar($_POST['modificar']);

}

if(isset($_POST['registrar'])){


  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];

  $obj_producto->set_codigo($codigo);
  $obj_producto->set_nombre($nombre);
  $obj_producto->set_descripcion($descripcion);
  $obj_producto->set_precio($precio);
  
  $obj_producto->registrar();

}

$productos = $obj_producto->consultar();

$titulo = "Inicio";
require_once "componentes/llamado_vistas.php";


