<!DOCTYPE html>
<html lang="es">
	
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>@yield('titulo','Konde') | Portafolio</title>
		<!-- Favicons-->
		<link rel="shortcut icon" href="assets/images/favicon.png">
		<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
		<!-- Web Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Lora|Montserrat:400,500,600,700|Open+Sans:400,400i,700" rel="stylesheet">
		<!-- Bootstrap core CSS-->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Icon Fonts-->
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/themify-icons.css" rel="stylesheet">
		<link href="assets/css/et-line.css" rel="stylesheet">
		<!-- Plugins-->
		<link href="assets/css/owl.carousel.css" rel="stylesheet">
		<link href="assets/css/magnific-popup.css" rel="stylesheet">
		<link href="assets/css/vertical.min.css" rel="stylesheet">
		<link href="assets/css/animate.css" rel="stylesheet">
		<!-- Template core CSS-->
		<link href="assets/css/template.css" rel="stylesheet">
	</head>
	<body>

		<!-- Preloader-->
		<div class="page-loader">
			<div class="cssload-container">
				<div class="cssload-whirlpool"></div>
			</div>
		</div>
		<!-- Preloader end-->

		<!-- Header-->
		@include('theme/portafolio/menu')
		<!-- Header end-->

		<!-- Wrapper-->
		<div class="wrapper">

			@yield('contenido')

			<!-- Footer-->
			@include('theme/portafolio/footer')
			<!-- Footer end-->
		</div>
		<!-- Wrapper end-->

		<!-- Scripts-->
		<script src="assets/js/jquery-2.2.4.min.js"></script>
		<script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
		<script src="assets/js/plugins.min.js"></script>
		<script src="assets/js/custom.min.js"></script>
		<!-- Color Switcher (Remove these lines)-->
		<script src="assets/js/style-switcher.min.js"></script>
	</body>

</html>