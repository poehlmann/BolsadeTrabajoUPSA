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
            	<h2>EXPERIENCIAS LABORALES</h2>
            	<div class="right-1">
            	<!--CAMBIAR ACTION-->
            	<form id="form1" name="form1" action="registroPersona.php"                       method="post" enctype="multipart/form-data" >

                    <fieldset>
                        <br>
                        <label for="titulo">TITULO/PUESTO
                        <br>
                    <input type="text" name="titulo" id="titulo"                                     maxlenght="15" required></label>
                      <br>
                        <label for="pais">SENIORITY  <br>   
                      <td><select name="pais" >
                          <option value="0">          </option>
                          <option value="1">Training</option>
                          <option value="2">Junior</option>
                          <option value="3">Semi-Seniority</option>
                          <option value="4">Seniority</option>
                          </select></td></label>
                      <br>
                   <label for="empresa">EMPRESA</label><br>
                    <input type="text" name="empresa" id="empresa"                                     maxlenght="15" required>
                       <br>
                       <label for="pais">PAIS  <br>   
                      <td><select name="pais" >
                          <option value="0">          </option>
                          <option value="1">Argentina</option>
                          <option value="2">Alemania</option>
                          <option value="3">Bolivia</option>
                          <option value="4">....</option>
                          </select></td></label>
               <br>  
                   <!--FECHA DE INICIO Y FECHA DE FINALIZACION -->
<label for="fechanac">FECHA DE NACIMIENTO(dia-mes-a&ntilde;o)</label><br>
               <input type="date" name="fechanac">      
               <br>        
                <label for="area">AREA   <br>  
                      <td><select name="area" >
                          <option value="0">          </option>
                          <option value="1">Ingenieria</option>
                          <option value="2">Marketing</option>
                          <option value="3">Diseño</option>
                          <option value="4">....</option>
                          </select></td></label>
                        <br>
                        <label for="subarea">SUB-AREA   <br>  
                          <td><select name="subarea" >
                              <option value="0">          </option>
                              <option value="1">Comercio</option>
                              <option value="2">Artes Graficas</option>
                              <option value="3">Desarrollo Web</option>
                              <option value="4">....</option>
                              </select></td></label>
                        <br>
            </div>
            </div>
            <div class="grid_4">
                <br><br><br>
                        <label for="industria">INDUSTRIA  <br>   
                          <td><select name="industria" >
                              <option value="0">          </option>
                              <option value="1">Agricola </option>
                              <option value="2">Electrica </option>
                              <option value="3">Manufacturera </option>
                              <option value="4">Transformacion </option>
                              </select></td></label>
                        <br>
                    <label for="personasacargo">PERSONAS A CARGO</label><br>
                    <input type="text" name="personasacargo"                                         id="personasacargo" required>
                       <br>
                       <!-- CHECKBOX MANEJABA PRESUPUESTO -->
            <label for="manejopresupuesto">MANEJABA PRESUPUESTO </label><br>
    <input type="checkbox" name="manejopresupuesto"id="manejopresupuesto">
                       <br> 
                     <label for="descripcion">DESCRIPCION DE                                 RESPONSABILIDADES <br><textarea name="descripcion"                                 id="descripcion" rows="10" cols="50" ></textarea>                            </label>
                 <br>                 
                 <input type="submit" value="ENVIAR" name="Enviar" /> 

                 <div class="btns"><a href="#" class="button">Limpiar</a>
                <a href="#" class="button" type=submit                                     onClick="document.getElementById('form').submit()">Enviar</a>                    </div>
                     <br>
                    <br>
                 <img src="images/page1-img2.png" alt="">
                <div class="extra-wrap">
                	 <h2>PASE A LA SIGUIENTE PAGINA </h2>
                   <p><a                          href="http://localhost:8080/bolsa/estudios.php" class="link"                              target="_blank" rel="nofollow">ingresa</a> </p>        
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