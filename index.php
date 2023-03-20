<!DOCTYPE html>
<html>
<head>
	<title>VRACAD</title>
	<link rel="stylesheet" type="text/css" href="dist/css/Main.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<img class="wave" src="dist/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="dist/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="login.php"  method="post">
				<img src="dist/img/avatar.png">
				<h3 class="title">Bienvenido al sistema de Carga Academica</h3>
				<br>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<!-- <h5>Usuario/Correo</h5> -->
           		   		
                      <input type="text" class="form-control" placeholder="USUARIO" name="username">
 
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<!-- <h5>Contraseña</h5> -->
           		    	
                     <input type="password" class="form-control" placeholder="CONTRASEÑA" name="password">
            	   </div>
            	</div>
            	<a href="#">¿Has olvidado tu contraseña?</a>
              <!-- <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" default>Registrarse</button> -->
            	<input type="submit" class="btn"  name="login" default value="INGRESAR">	
            </form>
        </div>
		<h3>UNIVERSIDAD NACIONAL DEL ALTIPLANO PUNO <br>OFICINA  VICERRECTORADO ACADÉMICO</h3>
    </div>
    <script type="text/javascript" src="dist/js/main.js"></script>
</body>
</html>


