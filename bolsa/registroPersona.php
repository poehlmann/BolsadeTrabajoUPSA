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
$celular = stripslashes($_POST['celular']);
$direccion = stripslashes($_POST['direccion']);
$email = stripslashes($_POST['email']);
$atrab = stripslashes($_POST['areaTrab']);
$com = stripslashes($_POST['comments']);

$error = '';

if((!$nombre)&&(!$apellidopaterno)&&(!$apellidomaterno))
{
$error .= 'Por favor escriba sus datos personales.<br />';
}

if(!$error){

    $conx = new  mysql;
    $conx->connect();
    $conx->select("dbprueba");

    $sqlQry="INSERT INTO personas (ci,nombre, apellidopaterno,apellidomaterno,telfcasa,celular,direccion, email, idTrb) VALUES ('$ci','$nombre','$apellidopaterno','$apellidomaterno','$telfcasa','$celular','$direccion','$email','$atrab')";

    $sqlDt = $conx->query($sqlQry)  or die('Error. '.mysql_error());

    echo "Ok";
  }
  else
  {
  echo '<div class="notification_error">'.$error.'</div>';
  }
}
?>