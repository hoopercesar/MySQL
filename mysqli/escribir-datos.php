<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');



if ($conexion->connect_errno !== 0) {
  die('Lo siento. Hubo $resultado->num_rows');
} else {
  $sql = "INSERT INTO datos_usuarios VALUES(null, 'camila',  '78')";
  $conexion->query($sql);

  if ($conexion->affected_rows >= 1) {
    echo 'Se cambiaron: '. $conexion->affected_rows. ' filas.';
  }

}



?>