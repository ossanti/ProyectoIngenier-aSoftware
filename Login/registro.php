<?php

include("conexion.php");

if(isset($_POST['register'])){
   if(strlen($_POST['user'])>= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password'])>= 1){
      $user = trim($_POST['user']);
      $email = trim($_POST['email']);
      $password = sha1($_POST['password']);
      $insertar = "INSERT INTO informationuser(user, email, password) VALUES ('$user','$email','$password')";
      $consulta = mysqli_query($conex, $insertar);
      if($consulta){
         ?>
         <div style="text-align: center; width: 100%; padding: 12px; background-color: #4e8; color: #fff">
         <h3> Inscripción completada </h3>
         <a class = "link" href="loginvista.php">Iniciar Sesion</a>
         </div>
         <?php
      } else {
         ?>
         <h3 style= "text-align: center; width: 100%; padding: 12px; background-color: #a22; color: #fff"> Ha pasado algo, intente nuevamente </h3>
         <?php
      }  
   } else {
      ?>
      <h3 style= "text-align: center; width: 100%; padding: 12px; background-color: #a22; color: #fff"> Llene todos los campos </h3>
      <?php
   }
}

?>