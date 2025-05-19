<?php

require_once "conexion.php";

class Producto extends Conexion{

  private $codigo;
  private $nombre;
  private $descripcion;
  private $precio;

  function set_codigo($valor){
    $this->codigo = $valor;
  }
  function set_nombre($valor){
    $this->nombre = $valor;
  }
  function set_descripcion($valor){
    $this->descripcion = $valor;
  }
  function set_precio($valor){
    $this->precio = $valor;
  }
  

  function __construct(){
    parent::__construct();
  }

  function registrar(){
    $sql = "INSERT INTO producto() VALUES('$this->codigo','$this->nombre','$this->descripcion','$this->precio')";
    $query = $this->conex->prepare($sql);
    $query->execute();
  }

  function modificar($codigo){
    $sql = "UPDATE producto SET codigo = '$this->codigo', nombre = '$this->nombre', descripcion = '$this->descripcion', precio = '$this->precio' WHERE codigo = '$codigo'";
    $query = $this->conex->prepare($sql);
    $query->execute();
  }

  function consultar(){
    $sql = "SELECT * FROM producto";
    $query = $this->conex->prepare($sql);
    $query->execute();

    if( $query->rowCount() > 0 ) {
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }else{
      return null;
    }

  }

  function buscar(){
    $sql = "SELECT * FROM producto WHERE codigo = '$this->codigo'";
    $query = $this->conex->prepare($sql);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
  }

  function eliminar(){
    $sql = "DELETE FROM producto WHERE codigo = '$this->codigo' ";
    $query = $this->conex->prepare($sql);
    $query->execute();
  }

}