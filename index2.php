<?php
    session_start();

    if(!isset($_SESSION['email'])){
      echo '
          <script>
              alert("Inicia Seccion");
              window.location = "login.php";
          </script>
      ';
      
      session_destroy();
      die();
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title> Principal </title>
	<meta charset="UTF-8">
    
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">


	<!-- css -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="maxtil.css"/>



	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	 
	<header class="header-area">
	
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		
		<nav class="nav-menu">
			<ul>
				<li class="active"><a href="index2.php"> Home </a></li>
				<li><a href=""> Blog </a></li>
				<li><a href="contacts.php"> Contactos </a></li>
				<li><a href="sugerencia.php"> Sugerencias </a></li>
				<li><a href="noticia2.html"> Noticias </a></li>
				<li><a href="https://paypal.me/brusoft?locale.x=es_ES"> Donaciones </a></li>
				<li><a href="curso_p.html"> Cursos De Programacion </a></li>
				<li><a href="curso_Info.html"> Cursos De Infromatica </a></li>
				<li><a href="#"> Chat Proximamente!! </a></li>
				<hr>
                

			</ul>
		</nav>
	</header>

	<section class="hero-section">
	
		<div class="left-bar">
			<div class="left-bar-content">
				<div class="social-links">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	
		<div class="hero-slider">
			<div class="hero-slide-item set-bg" data-setbg="pesa.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2> Comunity <br> BruSoft <br></h2>
					<a href="#" class="site-btn sb-light">See Project</a>
					</div>	
				</div>
			</div>	
			<div class="hero-slide-item set-bg" data-setbg="frito2.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2> Comunity <br> BruSoft <br></h2>
					<a href="#" class="site-btn sb-light">See Project</a>
					</div>	
				</div>
			</div>	
		</div>
		<div class="slide-num-holder" id="snh-1"></div>
		<div class="hero-right-text"> BruSoft </div>
	</section>



	
	
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.owl-filter.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>