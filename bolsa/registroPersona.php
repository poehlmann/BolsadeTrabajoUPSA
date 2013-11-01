<?php

include 'conexionMySql.php';


error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';

$name = stripslashes($_POST['name']);
$mail = stripslashes($_POST['email']);
$atrab = stripslashes($_POST['areaTrab']);
$com = stripslashes($_POST['comments']);

$error = '';

if(!$name)
{
$error .= 'Por favor escriba su nombre.<br />';
}

if(!$error){

    $conx = new  mysql;
    $conx->connect();
    $conx->select("dbprueba");

    $sqlQry="INSERT INTO personas (nombre, apellido, mail, idTrb) VALUES ('$name','$name','$mail','$atrab')";

    $sqlDt = $conx->query($sqlQry)  or die('Error. '.mysql_error());

    echo "Ok";
  }
  else
  {
  echo '<div class="notification_error">'.$error.'</div>';
  }
}
?>