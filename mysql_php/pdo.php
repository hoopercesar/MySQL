<?php

// las siguientes líneas de código hacen lo siguiente
// try{#codigo}catch(){#codigo} significa prueba este código 
// y si hay algún error muestra (catch) ese error.

// para producir la conexión desde php hasta una base de datos se usa 
// $conexion = new PDO(...)
// si se produce la conexión aparece en pantalla conexión exitosa
// si no aparece el mensaje aparece en pantalla el error. 

try{
  $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
  echo 'Conexion exitosa';
} catch(PDOException $e){
  echo 'Error: '.$e->getMessage();
}

print_r($conexion);

?>