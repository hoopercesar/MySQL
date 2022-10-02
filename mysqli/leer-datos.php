<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno !== 0) {
  die('Lo siento. Hubo u$resultado->num_rows');
} else {
  $sql = 'SELECT * FROM usuarios';
  $resultados = $conexion->query($sql);

  if ($resultados->num_rows) {
    //echo $resultados->num_columns;
    //var_dump($resultados->fetch_assoc());
    //var_dump($resultados->fetch_assoc());

    while($fila = $resultados->fetch_assoc()) {
      echo $fila['nombre'];
    }

  }else {
    echo 'no hay datos';
  }
}

//print_r($conexion);

?>