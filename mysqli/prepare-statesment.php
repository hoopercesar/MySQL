<?php

// este es un protocolo para ingresar información a una tabla
// o base de datos tomando en consideración la seguridad.
// es decir, asegurándonos que no se pueda inyectar código
// desde el exterior. 

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if ($conexion->connect_errno !== 0) {
  die('Lo siento. Hubo $resultado->num_rows');
} else {
  // con esta sentencia le decimos a la base de datos que se  prepare
  // para recibir solo tres valores, equivalentes a los simbolos ?
  // la base de datos sabrá que sólo va a recibir estos 3 valores
  // y no hará nada más. es decir, si alguien quiere insertar código
  // la base de datos no la ejecutará porque se preparó sólo para
  // recibir estas 3 variables. 
  $statement = $conexion->prepare("INSERT INTO datos_usuarios VALUES(?, ?, ?)");

  // Reemplazamos los placeholders (?) por los valores que deseemos
  // Una S por placeholder que tengamos
  // s: string
  // i: integer
  // d: double
  $statement->bind_param('ssi', $id, $nombre, $edad);
  $id = NULL;

  // Con el protocolo $_GET se puede agregar información a la base de datos
  // a través de la url. p. ej:
  // http://localhost/cursoPHP/mysql_php/mysqli/prepare-statesment.php?nombre=isabel&edad=33
  // agregamos el nombre isabel y la edad 33. 

  if (isset($_GET['nombre']) && isset($_GET['edad'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
  }

  $statement->execute();
  // el método affected_rows nos entrega la cantidad de filas añadidas 
  // a los datos. Cuando no se agregan filas, affected_rows entrega -1.
  echo 'Filas añadidas: '.$conexion->affected_rows;

}

?>