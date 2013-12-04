<!DOCTYPE html>
<html lang="en">
    
    
<script type="text/javascript">

function validarForm(formulario) {
  if(formulario.titulo.value.length==0) { //comprueba que no esté vacío
    formulario.nombre.focus();   
    alert('No has escrito tu titulo'); 
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
    <title>REGISTRO DE ESTUDIOS</title>
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
                      <li><a href="acercadenosotros.html">Acerca de nosotros</a></li>
                      <li><a href="vistaempresaconloginalumno.php">Empresas</a></li>
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
            	<h2>ESTUDIOS</h2>
            	<!--CAMBIAR ACTION-->
            	<form id="form1" name="form1" action="registroPersona.php"                       method="post" enctype="multipart/form-data" >

                    <fieldset>
                        <br>
                        <label for="titulo">TITULO</label>
                        <br>
                    <input type="text" name="titulo" id="titulo"                                     maxlenght="15" required>
                      <br>
                        <label for="pais">PAIS  <br>   
                      <td><select name="pais" >
                          <option value="0">          </option>
                          <option value="1">ARGENTINA</option>
                          <option value="2">BOLIVIA</option>
                          <option value="3">BRASIL-Seniority</option>
                          <option value="4">CHILE</option>
                          </select></td></label>
                      <br>
                        <label for="institucion">INSTITUCION</label>
                        <br>
                    <input type="text" name="institucion" id="institucion"                                     maxlenght="15" required>
                      <br>
                      <br>  
                   <!--FECHA DE INICIO Y FECHA DE FINALIZACION -->
<label for="fechadeinicio">FECHA DE INICIO(dia-mes-a&ntilde;o)-----></label><label for="fechadefinalizacion">FECHA DE FINALIZACION(dia-mes-a&ntilde;o)</label><br>
               <input type="date" name="fechadeinicio">
               ......................
               <input type="date" name="fechadefinalizacion">      
                       <br><br>
                       <label for="niveldeestudio">NIVEL DE ESTUDIO  <br>   
                      <td><select name="niveldeestudio" >
                          <option value="0">          </option>
                          <option value="1">Secuncdario</option>
                          <option value="2">Terciario</option>
                          <option value="3">Universitario</option>
                          <option value="4">....</option>
                          </select></td></label>
                <br>
                <label for="estado">ESTADO   <br>  
                      <td><select name="estado" >
                          <option value="0">          </option>
                          <option value="1">Graduado</option>
                          <option value="2">En curso</option>
                          <option value="3">Abandonado</option>
                          <option value="4">....</option>
                          </select></td></label>
                        <br>
                        <label for="areadeestudio">AREA DE ESTUDIO   <br>  
                          <td><select name="areadeestudio" >
                              <option value="0">          </option>
                              <option value="1">Comercio</option>
                              <option value="2">Artes Graficas</option>
                              <option value="3">Grastronomia</option>
                              <option value="4">....</option>
                              </select></td></label>
                        <br>
            </div>
            <div class="grid_4">
                <br><br><br>
                        <br>
                        <label for="institucion">INSTITUCION</label><br>
                    <input type="text" name="institucion" id="institucion"                                     maxlenght="15" required>
                        <br>
                        <label for="rango">RANGO  <br>   
                          <td><select name="rango" >
                              <option value="0">          </option>
                              <option value="1">de A hasta F </option>
                              <option value="2">de 1 a 70 </option>
                              <option value="3">de 1 a 100 </option>
                              <option value="4">... </option>
                              </select></td></label>
                        <br>
            <label for="materiasaprobadas">MATERIAS APROBADAS</label><br>
         <input type="text" name="materiasaprobadas" id="materiasaprobadas"                                     maxlenght="15" required>
            <br>
            <label for="cantidaddematerias">CANTIDAD DE MATERIAS</label>
        <input type="text" name="cantidaddematerias" id="cantidaddematerias"                                     maxlenght="15" required>

                 <br>                 
                 <input type="submit" value="ENVIAR" name="Enviar" /> 

                 <div class="btns"><a href="#" class="button">Limpiar</a>
                <a href="#" class="button" type=submit                                     onClick="document.getElementById('form').submit()">Enviar</a>                    </div>
                     <br>
                    <br>
                 <img src="images/page1-img2.png" alt="">
                <div class="extra-wrap">
                	 <h2>PASE A LA SIGUIENTE PAGINA </h2>
                   <p><a                          href="http://localhost:8080/bolsa/idiomas.php" class="link"                              target="_blank" rel="nofollow">ingresa</a> </p>        
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