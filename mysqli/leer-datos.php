<?php

$conexion = new mysqli('localhost', 'root', 'y', 'prueba_datos');

if ($conexion->connect_errno !== 0) {
  die('Lo siento. Hubo un problema con el servidor');
} else {
  $sql = 'SELLECT * FROM usuarios'
}

//print_r($conexion);

?>