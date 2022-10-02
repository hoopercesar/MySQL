<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno !== 0) {
  die('Lo siento. Hubo u$resultado->num_rows');
} else {
  $sql = 'SELECT * FROM datos_usuarios LIMIT 2';
  $resultados = $conexion->query($sql);

  if ($resultados->num_rows) {
    //echo $resultados->num_columns;
    //$uno = $resultados->fetch_assoc()['nombre'];
    //echo $uno.'<br />';
    //var_dump($resultados->fetch_assoc()['nombre']);
    //var_dump($resultados->fetch_assoc());
    //var_dump($resultados->fetch_assoc());

    //

    while($fila = $resultados->fetch_assoc()) {
      echo $fila['ID'].' -- '.$fila['nombre'].' -- '.$fila['edad'].'<br />';
    }

  }else {
    echo 'no hay datos';
  }
}

//print_r($conexion);

?>