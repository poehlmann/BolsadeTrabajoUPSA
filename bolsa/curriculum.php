<?php
 
//***************************//
//******** FUNCIONES ********//
//***************************//
 
//FUNCION PARA INSERTAR EL REGISTRO EN LA TABLA users_temp
//function insertarReg($name_, $username_, $password1_, $email_){
		/*Teneis que declarar las variables $servidor, $usuario,$password y 
		  $sdb (base de datos). En mi caso para Localhost tengo lo siguiente:*/
/*		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$sdb = "prueba1";
 
		$ilink3=mysql_connect($servidor,$usuario,$password) or die(mysql_error()); 
		mysql_select_db($sdb,$ilink3); 
 
		$inserta= "insert into users_temp (nombre,usersTemp,password,email,fecAlta) values ('$name_','$username_','$password1_','$email_',CURDATE())";
		$resultado3=mysql_query($inserta,$ilink3) or die (mysql_error());
 
		if (!$resultado3)
    	return false;
		else{
			return true;
		}
}
 
function validateName($name){
$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
	$caracter1KO = 0;
	if(strlen($name) < 5):
		return false;
	else:
	for ($i=0; $i<strlen($name); $i++){ 
	      if (strpos($permitidos, substr($name,$i,1))===false){ 
	         $caracter1KO = 1;
	 			} 
	}
	endif;
	if ($caracter1KO == 1 || strlen($name) <= 4):
		return false;
	else:
		return true;
	endif;
}
 
function validateUsername($username){
	$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
	$caracterKO = 0;
	if(strlen($username) < 5):
		return false;
	else:
	for ($i=0; $i<strlen($username); $i++){ 
	      if (strpos($permitidos, substr($username,$i,1))===false){ 
	         $caracterKO = 1;
	 			} 
	}
	endif;
	if ($caracterKO == 1 || strlen($username) <= 4):
		return false;
	else:
		return true;
	endif;
}
 
 
function validateExistUsername($username){
		/*Teneis que declarar las variables $servidor, $usuario,$password y 
		  $sdb (base de datos). En mi caso para Localhost tengo lo siguiente:*/
/*		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$sdb = "prueba1";
 
		$ilink=mysql_connect($servidor,$usuario,$password) or die(mysql_error()); 
 
		mysql_select_db($sdb,$ilink); 
		$consulta= "select usersTemp from users_temp where usersTemp = '$username'";
		$resultado=mysql_query($consulta,$ilink) or die (mysql_error());
		if (mysql_num_rows($resultado)>0)
			return false;
		else
			return true;
}
 
function validatePassword1($password1){
	//NO tiene minimo de 5 caracteres o mas de 12 caracteres
	if(strlen($password1) < 5 || strlen($password1) > 12)
		return false;
	// SI longitud, NO VALIDO numeros y letras
	else if(!preg_match("/^[0-9a-zA-Z]+$/", $password1))
		return false;
	// SI rellenado, SI email valido
	else
		return true;
}
 
function validatePassword2($password1, $password2){
	//NO coinciden
	if($password1 != $password2)
		return false;
	else
		return true;
}
 
function validateEmail($email){
 
if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
      	 if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
         	 //miro si tiene caracter . 
         	 if (substr_count($email,".")>= 1){ 
            	 //obtengo la terminacion del dominio 
            	 $term_dom = substr(strrchr ($email, '.'),1); 
            	 //compruebo que la terminación del dominio sea correcta 
            	 if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
               	 //compruebo que lo de antes del dominio sea correcto 
               	 $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
               	 $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
               	 if ($caracter_ult != "@" && $caracter_ult != "."){ 
                  	 $mail_correcto = 1; 
               	 } 
            	 } 
         	 } 
      	 } 
   	} 
   	if ($mail_correcto) 
      	 return true; 
   	else 
      	 return false; 
} 
 
function validateExistMail($mail){
		/*Teneis que declarar las variables $servidor, $usuario,$password y 
		  $sdb (base de datos). En mi caso para Localhost tengo lo siguiente:*/
/*		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$sdb = "prueba1";
 
		$ilink2=mysql_connect($servidor,$usuario,$password) or die(mysql_error()); 
		mysql_select_db($sdb,$ilink2); 
		$consulta2= "select id_usersTemp from users_temp where email = '$mail'";
		$resultado2=mysql_query($consulta2,$ilink2) or die (mysql_error());
		if (mysql_num_rows($resultado2)>0)
			return false;
		else
			return true;
}
 
 
//Comprobacion de datos
//variables valores por defecto
$name = "";
$nameValue = "";
$username = "";
$usernameValue = "";
$password1 = "";
$password2 = "";
$passwordValue = "";
$email1 = "";
$emailValue = "";
$existusername = "";
$existEmail = "";
 
//Validacion de datos enviados
if(isset($_POST['send'])){
	if(!validateName($_POST['name']))
		$name = "error";
	if(!validateUsername($_POST['username']))
		$username = "error";
	if(!validateExistUsername($_POST['username']))
		$existusername = "error";
	if(!validatePassword1($_POST['password1']))
		$password1 = "error";
	if(!validatePassword2($_POST['password1'], $_POST['password2']))
		$password2 = "error";
	if(!validateEmail($_POST['email']))
		$email1 = "error";
	if(!validateExistMail($_POST['email']))
		$existEmail = "error";
	//Guardamos valores para que no tenga que reescribirlos
	$nameValue = $_POST['name'];
	$usernameValue = $_POST['username'];
	$emailValue = $_POST['email'];
	$passwordValue = $_POST['password2'];
 
 
	//Comprobamos si todo ha ido bien
	if($name != "error" && $username != "error" && $password1 != "error" && $password2 != "error" && $email1 != "error"){	
		if($existusername == "error"){
			$existeU = 1;	
		}
		if($existEmail == "error"){
			$existeE = 1;	
		}
		if (!$existeU && !$existeE){
			$status = 1;
		}
	}
}
*/ 
//******** FIN FUNCIONES ********//
    
?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>SUSCRIPCION</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/Bilbo_400.font.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
   <header> 
       <div> 
          <div>                 	
              <h1><a href="vistaconloginalumno.php"><img src="images/logo.png" alt=""></a></h1> 
              <nav>  
                <ul class="menu">
                      <li><a href="vistaconloginalumno.php">Pagina Principal</a></li>
                      <li><a href="acercadenosotros.html">Acerca de                                                         nosotros</a></li>
                      <li><a href="vistaempresaconloginalumno.php.html">Empresas</a></li>
                      <li><a href="dabe.html">Dabe</a></li>
                      <li class="current"><a                                                         href="suscribite.php">Suscribite</a></li>
                  </ul>
              </nav>
              <div class="clear"></div>
          </div>
      </div>
    </header>  
  <!--==============================content================================-->
    <section id="content"></div>
    	<div class="container_12 top">
        	<p class="clr-1 p2"><h2>RELLENA TU FORMULARIO A PARTIR DE LAS SIGUIENTES PAGINAS</h2></p>
        	<div class="grid_8">
                <div class="right-1">
					<p>Esta atento a tu correo electronico las nuevas ofertas de trabajo llegaran ahi</p> 
            	<!--CAMBIAR ACTION-->	
            	<form id="form" name="form" action="registroPersona.php"                       method="post" enctype="multipart/form-data" >
                    <fieldset>
                    <label for="presentacion">PRESENTACION</label>  
                     <label for="presentacion">Este sera el primer texto que leera el empleador sobre ti, describe en pocas palabras tu perfil, tus cualidades destacadas y tu objetivo laboral</label> 
                 <br>
                 <textarea 
                 name="presentacion"id="presentacion"rows="10" cols="10">                   </textarea> 
                 <br><br>   
                </div>
            </div>
        <div class="grid_4">
                 <br>
            <label for="exptectativasalarial">EXPETECTATIVA LABORAL</label>
                     <br><input                                                                         type="text"name="exptectativasalarial"
                            id="exptectativasalarial"                                                     size="20" maxlength="9"required>
                        <br>    
                <br><br>
                 <input type="submit" value="ENVIAR" name="Enviar" /> 

                 <div class="btns"><a href="#" class="button">Limpiar</a>
                <a href="#" class="button" type=submit                                     onClick="document.getElementById('form').submit()">Enviar</a>                    </div>
                     <br>
                    <br>
                 <img src="images/page1-img2.png" alt="">
                <div class="extra-wrap">
                	 <h2>PASE A LA SIGUIENTE PAGINA </h2>
                   <p><a                          href="http://localhost:8080/bolsa/experienciaslaborales.php" class="link"                              target="_blank" rel="nofollow">ingresa</a> </p>
                </div> 
             </div>
           </fieldset>  
        </form>
            <div class="clear"></div>
        </div>
     </section>
<!--==============================footer=================================-->
  <footer>
      <p>© 2013 UPSA-DABE<br> Website by <a class="link" href="http://www.bruno@outlook.com/" target="_blank" rel="nofollow">www.bruno@outlook.com</a></p>
      <div class="soc-icons"><span>Siguenos en:</span><a href="#"><img src="images/icon-1.jpg" alt=""></a><a href="#"><img src="images/icon-2.jpg" alt=""></a><a href="#"><img src="images/icon-3.jpg" alt=""></a></div>
  </footer>	
</body>
</html>