<?php

// Se hace la conecion a la base de datos
$host = "localhost"; // nombre del Host
$user = "root"; // Usuario
$psw  = "70011036"; // Contraseña
$db   = "dbprueba"; // Nombre de la base de datos

function Conectarse() 
{ 
global $host, $user, $psw, $db;
   if (!($link=mysql_connect("$host","$user","$psw"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("$db",$link))
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 

$link = Conectarse();
// Recuperacion y creacion de variables
$a           = $_POST['a'];
$nombre      = htmlspecialchars ($_POST['nombre']) ;
$password    = (htmlspecialchars($_POST['password']));

session_start();
$_SESSION['nombre']=$_REQUEST['nombre'];
$_SESSION['password']=$_REQUEST['password'];


function llenar() {
   if (form.nombre.value == " ") {
   alert ('Debes llenar el campo de Nombre');
   return false;
   }
   if (form.password.value == "") {
   alert ('Debes de ingresar tu contraseña');
   return false;
   }
   return true;
}


switch ($a) {
   case 1:
         
         //Sentencia SQL para buscar un usuario con esos datos 
         $c_usuario = "SELECT * FROM alumno WHERE registro_upsa='$password' and nombre='$nombre'"; 
         //Sentencia SQL para buscar un usuario con esos datos 
          $e_usuario = "SELECT * FROM empresa WHERE cif='$password' and nombre='$nombre'"; 
         //Ejecuto la sentencia 
         $r_usuario = @mysql_query("$c_usuario",$link) or die(mysql_error()); 
         $r_ok = @mysql_fetch_array($r_usuario);
         //Ejecuto la sentencia
          $s_usuario = @mysql_query("$e_usuario",$link) or die(mysql_error()); 
         $s_ok = @mysql_fetch_array($s_usuario); 
         ////////////////////////////////////////////////////////
    if($r_ok['nombre'] == $nombre && $r_ok['registro_upsa'] == $password)
    {     
         $user_dat = mysql_query("SELECT * FROM alumno WHERE                         registro_upsa='$user_ID'") or die(mysql_error());
         $datos = mysql_fetch_array($user_dat);
         $user_ID = $r_ok['registro_upsa'];
         $user = $r_ok['nombre'];
         $acceso = "ok";
         setcookie("nombre",$user_ID,time()+3600);
         setcookie("password",$password,time()+3600);
         header("LOCATION: vistaconloginalumno.php"); 
    }
  elseif($s_ok['nombre'] == $nombre && $s_ok['cif'] == $password)
         {
         $user_dat = mysql_query("SELECT * FROM empresa WHERE                         cif='$user_ID'") or die(mysql_error());
         $datos = mysql_fetch_array($user_dat);
         $user_ID = $r_ok['cif'];
         $user = $r_ok['nombre'];
         $acceso = "ok";
         setcookie("nombre",$user_ID,time()+3600);
         setcookie("password",$password,time()+3600);
         header("LOCATION: vistaconloginempresa.php"); 
         }
    else{
             $acceso = "no";
             echo "<center>Nombre de usuario o contraseña incorrecta<br>
              por favor <b>intena de nuevo</b></a></center>";
             header("LOCATION: login.php");
         }
         
         
   break;
   default:
   $acceso = "no";
      form ();
   break;
}
mysql_close($link); //cierra la conexion 
?>