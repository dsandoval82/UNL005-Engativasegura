<?php
//creamos una funcion user para ser usada en todo el sitio
function User() {
   //instaciamos la conexion
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM usuarios;");
  if($sql->num_rows > 0) {
    while($d = $sql->fetch_array()) {
      $user[$d['email']] = $d;
    }
  } else {
    $user = false;
  }
  $sql->free();
  $db->close();
 
  return $user;
}
 
?>