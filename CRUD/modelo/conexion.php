<?php

// PDO = Objeto de Dato de PHP
require_once 'config/config.php';

abstract class Conexion{

  protected $conex;

  function __construct() {
    $this->conex = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASS);
  }

}


