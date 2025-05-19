<?php

if(is_file("vista/$pagina.php")){
  require_once "vista/$pagina.php";
}else{
  echo "Error 404: La pagina no existe";
}