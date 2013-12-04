<!DOCTYPE html>

<html lang="en">

<head>
    <title>PAGINA PRINCIPAL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/Bilbo_400.font.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:false,
				nextBu:false,
				playBu:false,
				duration:800,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:'fade',
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
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
        <li class="current"><a href="vistaconloginalumno.php">Pagina Principal</a></li>
        <li><a href="acercadenosotros.html">Acerca de nosotros</a></li>
                      <li><a href="dabe.html">Dabe</a></li>
                      <li><a href="suscribite.php">Suscribite</a></li>
                      <li><a href="login.php">Login</a></li>
<h2><li><a<?php session_start(); echo $_SESSION['nombre']; ?>></a> </li></h2>
                  </ul>
              </nav>
              <div class="clear"></div>
          </div>
      </div>
    </header>  
    <div id="slide">
       <div class="slider">
          <ul class="items">
              <li><img src="images/slider-1.jpg" alt="" /><div class="banner"><p class="text-1">Upsa <strong>bolsa de trabajo!</strong></p><p class="text-2">Pasantias y trabajos</p></div></li>
              <li><img src="images/slider-2.jpg" alt="" /><div class="banner"><p class="text-1">Upsa <strong>bolsa de trabajo!</strong></p><p class="text-2">Bolsa de trabajo para alumnos y ex-alumnos upsa</p></div></li>
              <li><img src="images/slider-3.jpg" alt="" /><div class="banner"><p class="text-1">Upsa <strong>Bolsa de trabajo!</strong></p><p class="text-2">Una forma facil de adecuar tu curriculum a tu pasantia</p></div></li>
          </ul>
       </div>
    </div>
  <!--==============================content================================-->
    <section id="content"></div>
    	<div class="container_12">
        	<div class="grid_6 box-1">
				<img src="images/page1-img1.png" alt="">
                <div class="extra-wrap">
                	<h2>Quienes somos</h2>
                    <p>Somos el centro Dabe <a href="http://localhost:8080/bolsa/dabe.html" class="link" target="_blank">Dabe</a>                         </p>
                </div>
            </div>  
            <div class="grid_6 box-1">
				<img src="images/page1-img2.png" alt="">
                <div class="extra-wrap">
                	<h2>Registrate</h2>
                    <p>Ingresa con tu numero de registro<a href="http://localhost:8080/bolsa/suscribite.php" class="link" target="_blank" rel="nofollow">Registrate</a> registro para alumnos y ex-alumnos </p>
                </div>
            </div>  
            <div class="grid_12 box-2">
            	<div>
                    <p class="text-3">Bienvenido <span>a la bolsa de trabajo</span> UPSA!</p>
                    <p class="text-4">Encontraras la mejor manera de encontrar tu bolsa de trabajo</p>
                </div>
            </div>
            <div class="grid_8">
            	<h2 class="top-1">Nuestra Idea</h2>
                <div class="box-3">
                	<div>
                    	<img src="images/page1-img3.jpg" alt="" class="img-border">
                        <a href="#" class="link-2">Una manera personalizada</a>
                        <p>Una manera personalizada de comparar la bolsa de trabajo con tu curriculum</p>
                    </div>
                	<div>
                    	<img src="images/page1-img4.jpg" alt="" class="img-border">
                        <a href="#" class="link-2">Recomiendanos</a>
                        <p>Cualquier sugerencias, estaremos abiertos a sugerencias</p>
                    </div>
                	<div class="last">
                    	<img src="images/page1-img5.jpg" alt="" class="img-border">
                        <a href="#" class="link-2">Escribenos </a>
                        <p>Si tienes alguna duda referente a la pagina comunicate con el DABE</p>
                    </div>
                </div>
                <a href="#" class="button top-4">Lee mas</a>
            </div>
            <div class="grid_4">
            	<h2 class="top-1">Ultimos Eventos</h2>
                <div class="box-4 top-2">
                    <div class="date"><strong>29</strong><span>noviembre, 2013</span></div>
                    <p><a href="#" class="link">Upsa bolsa de trabajo</a><br>Una bolsa de trabajo que va a ti</p>
                </div>
                <div class="box-4 top-3">
                    <div class="date"><strong>21</strong><span>noviembre, 2013</span></div>
                    <p><a href="#" class="link">Ultimas noticias de bolsa de trabajo</a><br>Las empresas hallan innovador para una universidad</p>
                </div>
                <a href="#" class="button top-4">Lee mas</a>
            </div>    
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