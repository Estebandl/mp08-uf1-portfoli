<!DOCTYPE html>
<html>
	<head>
		<title>Contacto | Portfolio Esteban Dobarro</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="robots" content="Index, Follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Esteban Dobarro Leiva">
		<meta name="language" content="spanish">
		<meta name="description" content="Portfolio, Portfolio Diseñador Web, Diseño Web, Java, PHP, Javascript, HTML, CSS, Portafolio, Contacto">
	</head>

	<body>
		<div class="cabecera">
			<div class="botonesrss">
				<a href="http://www.facebook.com"><img src="img/Facebook_icon.png"></a>
				<a href="http://www.instagram.com"><img src="img/Instagram_icon.png"></a>
				<a href="http://www.linkedin.com"><img src="img/LinkedIn_icon.png"></a>
				<a href="http://www.youtube.com"><img src="img/Youtube_icon.png"></a>
			</div>
			
			<h1 class="borde">Portfolio Esteban Dobarro</h1>

			<div class="horizontal-menu">
				<a href="index.html">Inicio</a>
				<a href="demos.html">Demos</a>
				<a href="contact.html">Contacto</a>
			</div>
		</div>

		<div id="areacontacto">
			<h1 class="titulo">Datos de contacto</h1>
			<p>Dirección:<br>
			Carrer Nou, 1<br>
			43820, Calafell<br>
			Tarragona, Spain<br><br>

			Teléfono: 977664455<br>
			Fax: 977664433<br>
			e-mail: estebandleiva@gmail.com<br></p>
		</div>

		<div id="formularioContacto">
				
			<h1 class="titulo">Contactanos</h1>

			<FORM ACTION="contact.php" METHOD="POST">
				<INPUT TYPE="text" NAME="nombre" SIZE="150" placeholder="Nombre"><br><br>
				<INPUT TYPE="text" NAME="email" SIZE="150" placeholder="Correo electronico"><br><br>
				<TEXTAREA NAME="mensaje" placeholder="Mensaje"></TEXTAREA><br><br>		
				<INPUT TYPE="submit" VALUE="Enviar">
			</FORM>
		</div>
	</body>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129361164-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-129361164-1');
	</script>

</html>