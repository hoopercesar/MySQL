<?php

// las siguientes líneas de código hacen lo siguiente
// try{#codigo}catch(){#codigo} significa prueba este código 
// y si hay algún error muestra (catch) ese error.

// para producir la conexión desde php hasta una base de datos se usa 
// $conexion = new PDO(...)
// si se produce la conexión aparece en pantalla conexión exitosa
// si no aparece el mensaje aparece en pantalla el error. 

print_r($_GET[]);


try{
  $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
  echo 'Conexion exitosa'.'<br />';

  // para acceder a la información contenida en la tabla de la base de datos
  // la tabla es usuarios
  $resultados = $conexion->query('SELECT*FROM usuarios WHERE id=2');

  // el argumento de query() acepta los comandos de mysql (select nombre from... etc)..


  foreach($resultados as $fila) {
    //print_r($fila);
    echo $fila['id'].'--'.$fila['nombre']. '--' . $fila['email']. '<br />';
  }
} catch(PDOException $e){
  echo 'Error: '.$e->getMessage();
}



?>