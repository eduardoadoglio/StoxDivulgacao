<!DOCTYPE html>
<html>
<head>
	<title>Stox</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300|Questrial" rel="stylesheet">
</head>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- Importando a biblioteca ScrollTo -->
    <script src="js/scrollTo/jquery.scrollTo.min.js"></script>
    <script src="js/inviewport.js"></script>
    <script src="js/main.js"></script>
<body>
<div class="container-fluid">
	<div class="row menu-row">
		<div class="col-md-12 menu">
			<a href="#"><img class="menu-logo" id="logo" src="images/LogoStox.png"></a>
		<div class="menulink">
			<a class="menu-item" id="svc-link" href="#"> LINK 1 </a>
			<a class="menu-item" href="#"> LINK 2 </a>
			<a class="menu-item" href="#"> LINK 3</a>
		</div>		
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 hero">
			<div class="col-md-6 offset-3 hero-text">
				<span class="hero-title">
					Uma gestão <span class="highlight">rápida</span><br>
					para seu estoque<br>
					e o seu negócio <span class="highlight">evoluirem.</span> <br>
				</span>
			</div>
			<img src="images/arrowdown.svg" id="herobutton" class="heroarrow">
		</div>
	</div>
		<!-- Início do Content -->
		<div class="content" id="content">
			<div class="row">
				<div class="col-md-12 svc-title">
					DIFERENCIAIS<hr>
				</div>
			</div>
			<!-- Início do Services -->
			<div class="row">
			<div class="col-md-12 services" id="svc1">
				<img class="svcimage-impar" src="images/cloud.png">
				<span class="svc-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</span>
			</div>
			</div>

			<div class="row">
			<div class="services" id="svc2">
				<span class="svc-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</span>
				<img class="svcimage-par" src="images/internet.png">
			</div>
			</div>

			<div class="row">
			<div class="col-md-12 services" id="svc3">
				<img class="svcimage-impar" src="images/security.png">
				<span class="svc-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</span>
			</div>
			</div>
		</div>	
</div>
<?php
include("include/footer.html")
?>				
</body>
</html>