<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: Login/loginvista.php');
    exit;
} else {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header class="header" id="inicio">
        <img class="hamburguer" src="img/hamburguesa.svg" alt="">
        <nav class="menu-navegacion">
                <a href="#inicio">Inicio</a>
                <a href="#perfil">Perfil</a>
                <a href="#Slides">Ejercicio Prueba</a>
                <a href="#ejercicios">Previsualización de Ejercicios Básicos</a>
                <a href="#expertos">Módulos</a>
                <a href="#footer">Contacto</a>
        </nav>
        <div class="head">
            <h1 class="titulo">BIENVENIDO A MATE CON</h1>
            <div class="head2">
                <p class="ASO-1">A-</p> <p class="ASO-2">S-</p> <p class="ASO-3">O</p>
            </div>
            <p class="copy">Aprender también es divertido.</p>
        </div>
        
    </header>
    <main>
        <section class="contenedor" id="perfil">
            <h2 class="subtitulo">Mi perfil</h2>
            <div class="contenedor-servicio">
                <img src="img/perfil.png" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span>Usuario</h3>
                        <p>
                            <?php
                              echo $_SESSION['user'];
                            ?>
                        </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span>Email</h3>
                        <p>
                        <?php
                              echo $_SESSION['email'];
                            ?>
                        </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span>Puntaje</h3>
                        <p>
                        <?php
                              echo $_SESSION['puntaje'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="slides" id="Slides">
            <div class="contenedor">  
            <h2 class="subtitulo">Ejemplo de Ejercicio</h2>  
            <div class="contenedor-slides">    
                <ul class="slider">
                  <li id="slide1">
                    <img src="img/ejercicio1.1.png"/>
                  </li>
                  <li id="slide2">
                    <img src="img/ejercicio1.2.png"/>
                  </li>
                  <li id="slide3">
                    <p class="enunciados">Realice el ejercicio para calcular el numero de páginas del libro de Mariana</p>  
                    <div class="enunciados-head">
                        <img style = "width: 100px; height: 100px" src="img/libroM.png"/>
                        <p style = "margin-top: 30px; font-size: 30px; font-weight: bold; color: blueviolet; margin-right: 10px">29</p>
                        <img style = "width: 50px; height: 50px; margin-top: 25px" src="img/SIMBOLO-MAS.png"/>
                        <img style = "width: 100px; height: 100px" src="img/libroM.png"/>
                        <p style = "margin-top: 30px; font-size: 30px; font-weight: bold; color: blueviolet; margin-right: 10px; ">75</p>
                        <img style = "width: 50px; height: 50px; margin-top: 25px; margin-right: 10px" src="img/elmeromeroigual.png"/>
                        <input style = "border-radius: 5px; background-color: rgba(197, 136, 255, 0.705); border: 0; max-lines: 2; width: 180px; height: 50px; margin-right: 10px; margin-top: 25px" maxlength="3" type="text" placeholder="Escriba el resultado" id="user1">
                        <input style = "border-radius: 5px; background-color: aqua; width: 180px; height: 50px; margin-right: 10px; margin-top: 25px; border: 0" type="button" value="Comprobar" onclick="Operacion();">

                    </div>
                  </li>
                </ul>
                
                <ul class="menu">
                  <li>
                    <a href="#slide1">1</a>
                  </li>
                  <li>
                    <a href="#slide2">2</a>
                  </li>
                   <li>
                    <a href="#slide3">3</a>
                  </li>
                </ul>
                
              </div>
            </div>
        </section> 
        <section class="gallery" id="ejercicios">
            <div class="contenedor">
                <h2 class="subtitulo">Ejercicios Básicos</h2>
                <div class="contenedor-galeria">
                    <img src="img/ejercicio1.3.png" class="img-galeria" alt="Hola">
                    <img src="img/ejercicio1.4.png" class="img-galeria" alt="">
                    <img src="img/ejercicio1.5.png" class="img-galeria" alt="">
                    <img src="img/ejercicio1.6.png" class="img-galeria" alt="">
                </div>
            </div>
        </section>
        <div class="imagen-light">
            <img src="img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </div>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Modulos</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/Operaciones.jpg" alt="">
                    <h3 class="n-expert"></h3>
                    <a href ="Operaciones_Basicas.php">Operaciones Basicas</a>.
                </div>
                <div class="cont-expert">
                    <img src="img/Geometria.jpg" alt="">
                    <h3 class="n-expert"></h3>
                    <a href ="Geometria.php">Geometria</a>.
                </div>
                <div class="cont-expert">
                    <img src="img/Conjunto.jpg" alt="">
                    <h3 class="n-expert"></h3>
                    <a href ="Conjuntos.php">Conjuntos</a>.
                </div>
            </section>
        </section>
    </main>

    <footer id="footer">
        <div class="contenedor footer-content">

                <div class="social-media">
                    <a href="https://www.facebook.com/poligran/" class="social-media-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://twitter.com/poligran" class="social-media-icon">
                        <i class='bx bxl-twitter' ></i>
                    </a>
                    <a href="https://www.instagram.com/poligrancol/" class="social-media-icon">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </div>
        </div>
        <div class="line"></div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
    <script type="text/javascript">
             function Operacion() {
                 var N1 = 29;
                 var N2 = 75;
                 var sum;
                 sum = N1 + N2;
                 var resUs = parseInt(document.getElementById("user1").value);
                 var puntaje = document.getElementById("mostrar_puntaje");
                 let resuelto = false;
                 if(resuelto == true){
                    alert("Ya lo resolvió")
                 }else{
                    if(resUs == sum){
                      alert("Bien");
                      resuelto = true;
                      var pun = 25;
                      puntaje.innerHTML += pun;
                    }else{
                      alert("Mal")
                    }
                 }
             } 
    </script>
</body>
</html>
<?php
}
?>