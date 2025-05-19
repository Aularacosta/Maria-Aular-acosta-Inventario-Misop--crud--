<?php

$pagina = 'inicio';

if (isset($_GET['url'])) {
    $pagina = $_GET['url'];
}

if(is_file("controlador/$pagina.php")){
  require_once "controlador/$pagina.php";
}else{
  echo "Error 404: La pagina no existe";
}