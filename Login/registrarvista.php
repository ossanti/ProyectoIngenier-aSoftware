<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>
 <form class="formulario" method="POST">
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input style = "font-size: 20px; width: 82%; padding: 10px; border: none" type="text" name = "user" placeholder="Usuario">
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input style = "font-size: 20px; width: 82%; padding: 10px; border: none" type="email" name = "email" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name = "password" placeholder="Contraseña">
         
         </div>
         <input type="submit" name = "register" value="Registrate" class="button">
         <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.php">Iniciar Sesion</a></p>
     </div>
    </form>
    <?php
      include("registro.php");
    ?>
</body>
</html>