<?php
session_start();
include("Login/conexion.php");
     $usuario = $_SESSION['user'];
     $puntaje = $_SESSION['puntaje'];
     $res= $_POST['op1'];
     $res2 = $_POST['op2'];
     $res3 = $_POST['op3'];
     $suma = $puntaje + 25;

    if(isset($_POST['btnop1'])){ 
    if($res == 3){
       $sql= "UPDATE informationuser SET score ='$suma' WHERE user='$usuario'";
       $insertar = mysqli_query($conex, $sql);
       $_SESSION['puntaje']= $suma;
       header('Location: Conjuntos.php#inicio'); 
    }else{
       header('Location: Conjuntos.php#slide1');
    }
} else if(isset($_POST['btnop2'])){
    if($res2 == 2){
        $sql= "UPDATE informationuser SET score ='$suma' WHERE user='$usuario'";
        $insertar = mysqli_query($conex, $sql);
        $_SESSION['puntaje']= $suma; 
        header('Location: Conjuntos.php#inicio');  
    }else{
        header('Location: Conjuntos.php#slide4');
    }
} else if(isset($_POST['btnop3'])){
    if($res3 == 4){
        $sql= "UPDATE informationuser SET score ='$suma' WHERE user='$usuario'";
        $insertar = mysqli_query($conex, $sql);
        $_SESSION['puntaje']= $suma; 
        header('Location: Conjuntos.php#inicio'); 
    }else{
        header('Location: Conjuntos.php#slide7');
    }
}

?>