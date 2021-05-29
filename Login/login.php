<?php 

    include("conexion.php");
	session_start();

	$conexion=$conex;

    if (isset($_POST['login'])) {
		$usuario=$_POST['usuario'];
		$pass=sha1($_POST['contra']);

		$sql="SELECT * from informationuser where user='$usuario' and password='$pass'";
		$result=mysqli_query($conexion,$sql);

		if(mysqli_num_rows($result) > 0){
            $_SESSION['user']=$usuario;
            while($consulta = mysqli_fetch_array($result)){
            $_SESSION['email']= $consulta['email'];
            $_SESSION['puntaje']= $consulta['score'];
            }
            header("Location: ../index.php");
		}else{
             include("loginvista.php");
			?>
            <h3 style= "text-align: center; width: 100%; padding: 12px; background-color: #a22; color: #fff"> Ingrese usuario y contraseña válidos </h3>
            <?php
		}
    }
 ?>