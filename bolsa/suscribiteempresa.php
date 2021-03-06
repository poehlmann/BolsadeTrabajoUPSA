<!DOCTYPE html>
<html lang="en">
    
    
<script type="text/javascript">
function validarForm(formulario) {
  if(formulario.nombre.value.length==0) { //comprueba que no esté vacío
    formulario.nombre.focus();   
    alert('No has escrito tu nombre'); 
    return false; //devolvemos el foco
  }
  if(formulario.email1.value.length==0) { //comprueba que no esté vacío
    formulario.email.focus();
    alert('No has escrito tu e-Mail');
    return false;
  }
  return true;
}
</script>    
    
    
<head>
    <title>REGISTRO DE EMPRESA</title>
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
              <h1><a href="vistaconloginempresa.php"><img src="images/logo.png" alt=""></a></h1> 
              <nav>  
                <ul class="menu">
                      <li><a href="vistaconloginempresa.php">Pagina Principal</a></li>
                      <li><a href="acercadenosotros.html">Acerca de nosotros</a></li>
                      <li><a href="empresas.html">Empresas</a></li>
                      <li><a href="dabe.html">Dabe</a></li>
                      <li class="current"><a href="suscribite.php">Suscribite</a></li>
                  </ul>
              </nav>
              <div class="clear"></div>
          </div>
      </div>
    </header>  
  <!--==========================contenido================================-->
    <section id="content"></div>
    	<div class="container_12 top">
            <div class="grid_8">
            	<h2>Suscribite</h2>
            	<form id="form" action="registroempresa.php" method="post" onsubmit="return validarForm(this);">
                    <fieldset>
                        
                        <label for="ci">CIF<input type="text" name="cif" id="cif"  required></label>
                      
                        <label for="nombre">NOMBRE DE LA EMPRESA<input type="text" name="nombre" id="nombre"  required> </label>
                       
                        <label for="dominiosocial">DOMINIO SOCIAL<input type="text" name="dominiosocial" id="dominiosocial" value="" required></label>
                       
                        <label for="numerodetrabajadores">NUMERO DE TRABAJADORES<input type="number" name="numerodetrabajadores" id="numerodetrabajadores"  value="" required></label>
                        <br>
                        WEB  
                        <label for="web"><input type="text" name="web" id="web" value="" required></label>
                         
                      <label for="telfempresa">TELF EMPRESA<input type="text" name="telfempresa" id="telfempresa" value="" required></label>
                        
                        <label for="sector">SECTOR DE LA EMPRESA     
      <td><select name="sector" >
          <option value="1">Comercio</option>
          <option value="2">Artes Graficas</option>
          <option value="3">Desarrollo Web</option>
          <option value="4">....</option>
          </select></td></label>

                        
                      <label for="descripcion">DESCRIPCION<textarea name="descripcion" id="descripcion" rows="3" cols="5" ></textarea></label>
                        
                       
            </div>
            <div class="grid_4">
                <br><br><br>
         <label for="nombredelencargado">NOMBRE DEL ENCARGADO</label>
                  <input type="text" name="nombredelencargado" id="nombredelencargado"  required></td>
                    <br>
                <label for="correodelencargado">CORREO DEL ENCARGADO
                     <td></td><input type="text" name="correodelencargado" id="correodelencargado" required></td></label>
                <br>
                <input type="submit" value="ENVIAR" name="Enviar" /> 
                <div class="btns"><a href="#" class="button">Limpiar</a><a href="#" class="button" onClick="document.getElementById('form').submit()">Enviar</a></div>
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