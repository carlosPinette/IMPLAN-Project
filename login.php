<?php

?>
<!DOCTYPE html>

	<html>

		<head>
 		<meta charset='utf-8'> 
 		<link rel="stylesheet" type="text/css" href="estilo.css">

		</head>


		<body>
			<header>
			<div id="container1">
				<img src="img/logo.png" height="100" width="280" class="logo">
				<img src="img/logoimplan.png" height="100" width="243" class="logo1">
			</div>
			</header>

			<section>
				<div id="wrap">
				<form class="login" action="validausuario.php">
					<h1>LOGIN</h1>

				<div class="center">
					<label class="hidden">Usuario</label>	<input type="text" name="usuario" value="Usuario" id="usuario"
onblur="if (this.value == '') {this.value = 'Usuario';}"
onfocus="if (this.value == 'Usuario') {this.value = '';}" />
					<label class="hidden">Contraseña</label><input type="text" name="password" value="Password" id="password"
onblur="if (this.value == '') {this.value = 'Password';}"
onfocus="if (this.value == 'Password') {this.value = '';this.type='password'}" />
					<input type="submit" class="boton">
				</div>
				</form>
				</div>
			</section>

			<footer></footer>

		</body>
</html>