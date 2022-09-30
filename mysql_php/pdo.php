<?php

// las siguientes líneas de código hacen lo siguiente
// try{#codigo}catch(){#codigo} significa prueba este código 
// y si hay algún error muestra (catch) ese error.

// para producir la conexión desde php hasta una base de datos se usa 
// $conexion = new PDO(...)
// si se produce la conexión aparece en pantalla conexión exitosa
// si no aparece el mensaje aparece en pantalla el error. 

$id = $_GET['id'];

try{
  $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
  echo 'Conexion exitosa'.'<br />';

  // Método Query
  // para acceder a la información contenida en la tabla de la base de datos
  // la tabla es usuarios
  // $resultados = $conexion->query("SELECT*FROM usuarios WHERE id=$id");

  // el argumento de query() acepta los comandos de mysql (select nombre from... etc)

  // Prepared Statesment
  // prepara la consulta
  $statements = $conexion->prepare("SELECT * FROM usuarios");
  // ejecuta la consulta
  $statements->execute();

  // dentro del argumento de execute se puede agregar un arreglo asociativo para hacer 
  // llamadas más específicas. P. ej:
  // $statements->execute(array(':id1' => numero1, ':id2' => numero2))
  // naturalmente, el agumento de prepare debe ser:
  // $conexion-> prepare("SELECT * FROM usuarios WHERE id = :id")

  // el método fetch()  trae un solo usuario.
  // el método fetchAll() trae todos los usuarios
  $resultados = $statements->fetchAll();

  echo "<pre>";
  print_r($resultados);
  echo "</pre>";


  //foreach($resultados as $fila) {
  //  //print_r($fila);
  //  echo $fila['id'].'--'.$fila['nombre']. '--' . $fila['email']. '<br />';
  //}
} catch(PDOException $e){
  echo 'Error: '.$e->getMessage();
}



?>