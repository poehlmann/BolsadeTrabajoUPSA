
<?php

include 'conexionMySql.php';


error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';
$ci = stripslashes($_POST['ci']);
$nombre = stripslashes($_POST['nombre']);
$apellidopaterno = stripslashes($_POST['apellidopaterno']);
$apellidomaterno = stripslashes($_POST['apellidomaterno']);
$telfcasa = stripslashes($_POST['telfcasa']);
$telfcelular = stripslashes($_POST['telfcelular']);
$direccion = stripslashes($_POST['direccion']);
$email = stripslashes($_POST['email']);
$sexo = stripslashes($_POST['sexo']);
$fotoperfil = stripslashes($_POST['fotoperfil']);
$numeroregistro = stripslashes($_POST['numeroregistro']);
$error = '';

if((!$nombre)&&(!$apellidopaterno)&&(!$apellidomaterno))
{
$error .= 'Por favor escriba sus datos personales.<br />';
}

if(!$error){

    $conx = new  mysql;
    $conx->connect();
    $conx->select("dbprueba");

    $sqlQry="INSERT INTO personas (numeroregistro,ci,nombre, apellidopaterno,apellidomaterno,telfcasa,celular,direccion, email, sexo,fotoperfil) VALUES ('$numeroregistro','$ci','$nombre','$apellidopaterno','$apellidomaterno','$telfcasa','$telfcelular','$direccion','$email','$sexo','$fotoperfil')";

    $sqlDt = $conx->query($sqlQry)  or die('Error. '.mysql_error());

     
    echo "Ok";
  }
  else
  {
      
  echo '<div class="notification_error">'.$error.'</div>';
  }
}
?>