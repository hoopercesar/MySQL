<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno !== 0) {
  die('Lo siento. Hubo un problema con el servidor');
} else {
  echo ('has entrado exitosamente al banco de datos');
}

//print_r($conexion);

?>