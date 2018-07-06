<?php
//vrificamos que se haya enviado via post
if(strtolower($_SERVER['REQUEST_METHOD']) != 'post'){
    estado_servidor('Error! Metodo de ingreso invalido!');
}
//instaciamos la conexion
$db = new Conexion();
//creamos variables con los datos enviados desde el formulario y las limpiamos

$userrol = "usuario";
$nombre = strip_tags($_POST['nombre']);
$apellido = strip_tags($_POST['apellido']);
$email = $db->real_escape_string($_POST['email']); 
$telefono = strip_tags($_POST['telefono']);
$direccion = strip_tags($_POST['direccion']);
$documento = strip_tags($_POST['documento']);
$informacion = "Sin Informacion personal";
$imgperfil = "user.png";
$pass = strip_tags($_POST['password']);
	
	

//$reg_user = "SELECT * FROM usuarios WHERE email='$email'";
$consulta = "INSERT INTO usuarios VALUES (NULL,'" .$userrol. "','" .$email. "','" .$pass. "','" .$nombre. "','" .$apellido. "','" .$telefono. "','" .$direccion. "','" .$documento. "','" .$informacion. "','" .$imgperfil. "')";

$result = $db->query($consulta);

if($result)
    { 
	$message =1;
	//$message ='<div class="alert alert-form alert-success text-xs-center">Usuario Registrado Exisotsamente!</div>';
        //echo "Usuario Registrado Exisotsamente";
    }
    else
    {
		$message = $result;
		//$message ='<div class="alert alert-form alert-warning text-xs-center">No se pudo registrar el Usuario.</div>';
        //echo "No se registrar el usuario";
    }
	
echo $message;
 
function estado_servidor($str){
    echo json_encode(array('estado'=>$str));
    exit;
}
?>