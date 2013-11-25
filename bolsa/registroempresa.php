<?php

include 'conexionMySql.php';


error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';
$cif = stripslashes($_POST['cif']);
$nombre = stripslashes($_POST['nombre']);
$dominiosocial = stripslashes($_POST['dominiosocial']);
$numerodetrabajadores = stripslashes($_POST['numerodetrabajadores']);
$web = stripslashes($_POST['web']);
$telfempresa = stripslashes($_POST['telfempresa']);
$sector = stripslashes($_POST['sector']);
$direccion = stripslashes($_POST['direccion']);
$nombredelencargado = stripslashes($_POST['nombredelencargado']);
$correodelencargado = stripslashes($_POST['correodelencargado']);
$error = '';

if(!$cif)
{
    $error .= 'Por favor escriba su cif<br />';
    
}
if(!$error){

    $conx = new  mysql;
    $conx->connect();
    $conx->select("dbprueba");

    $sqlQry="INSERT INTO empresa (cif,nombre, dominiosocial,numerodetrabajadores,web,telfempresa, sector, direccion,nombredelencargado,correodelencargado) VALUES ('$cif','$nombre','$dominiosocial','$numerodetrabajadores','$web','$telfempresa','$sector','$direccion','$nombredelencargado','$correodelencargado')";

    $sqlDt = $conx->query($sqlQry)  or die('Error. '.mysql_error());

    echo "Ok";
  }
  else
  {
  echo '<div class="notification_error">'.$error.'</div>';
  }
}
?>