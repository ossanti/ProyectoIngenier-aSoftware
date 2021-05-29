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
    <title>Conjuntos</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

  <header class="header" id="inicio">
    <img class="hamburguer" src="img/hamburguesa.svg" alt="">
    <nav class="menu-navegacion">
            <a href="#inicio">Inicio</a>
            <a href="#perfil">Perfil o Puntaje</a>
            <a href="#Ejercicio1">Ejercicio N1</a>
            <a href="#Ejercicio2">Ejercicio N2</a>
            <a href="#Ejercicio3">Ejercicio N3</a>
            <a href="#expertos">Módulos o Regresar</a>
            <a href="#footer">Contactos</a>
    </nav>
    <div class="head">
        <h1 class="titulo"> MATE CON</h1>
        <div class="head2">
            <p class="ASO-1">A-</p> <p class="ASO-2">S-</p> <p class="ASO-3">O</p>
        </div>
        <p class="copy">Modulo Conjuntos.</p>
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
    <section class="slides" id="Ejercicio1">
        <div class="contenedor">  
        <h2 class="subtitulo">Ejercicio N1</h2>  
        <div class="contenedor-slides">    
            <ul class="slider">
              <li id="slide1">
                <img src="img/Ope7.1.png"/>
              </li>
              <li id="slide2">
                <img src="img/Ope7.2.png"/>
              </li>
              <li id="slide3">
                <p class="enunciados">Ingrese el numero que considere que es el conjunto con mas objetos.</p>  
                <div class="enunciados-head">
                    <img style = "width: 400px; height: 140px" src="img/Ope7.3.png"/>
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
    </section>
    <section class="slides" id="Ejercicio2">
        <div class="contenedor">  
        <h2 class="subtitulo">Ejercicio N2</h2>  
        <div class="contenedor-slides">    
            <ul class="slider">
              <li id="slide4">
                <img src="img/Ope8.1.png"/>
              </li>
              <li id="slide5">
                <img style = "width: 500px; height: 400px" 
                src="img/Ope8.2.png"/>
              </li>
              <li id="slide6">
                <p class="enunciados">Ingrese el numero de la operacion que considere correspondiente</p>  
                <div class="enunciados-head">
                    <img style = "width: 400px; height: 140px" src="img/Ope8.3.png"/>
                    <input style = "border-radius: 5px; background-color: rgba(197, 136, 255, 0.705); border: 0; max-lines: 2; width: 180px; height: 50px; margin-right: 10px; margin-top: 25px" maxlength="3" type="text" placeholder="Escriba el resultado" id="user2">
                    <input style = "border-radius: 5px; background-color: aqua; width: 180px; height: 50px; margin-right: 10px; margin-top: 25px; border: 0" type="button" value="Comprobar" onclick="Operacion1();">
                </div>
              </li>
            </ul>
            
            <ul class="menu">
              <li>
                <a href="#slide4">1</a>
              </li>
              <li>
                <a href="#slide5">2</a>
              </li>
               <li>
                <a href="#slide6">3</a>
              </li>
            </ul>
            
          </div>
        </div>
    </section> 
    <section class="slides" id="Ejercicio3">
      <div class="contenedor">  
      <h2 class="subtitulo">Ejercicio N3</h2>  
      <div class="contenedor-slides">    
          <ul class="slider">
            <li id="slide7">
              <img src="img/Ope9.1.png"/>
            </li>
            <li id="slide8">
              <img src="img/Ope9.2.png"/>
            </li>
            <li id="slide9">
              <p class="enunciados">Ingrese el numero que corresponde a la operacion de interseccion</p>  
              <div class="enunciados-head">
                  <img style = "width: 370px; height: 130px" src="img/Ope9.3.png"/>
                  <input style = "border-radius: 5px; background-color: rgba(197, 136, 255, 0.705); border: 0; max-lines: 2; width: 180px; height: 50px; margin-right: 10px; margin-top: 25px" maxlength="3" type="text" placeholder="Escriba el resultado" id="user3">
                  <input style = "border-radius: 5px; background-color: aqua; width: 180px; height: 50px; margin-right: 10px; margin-top: 25px; border: 0" type="button" value="Comprobar" onclick="Operacion2();">

              </div>
            </li>
          </ul>
          
          <ul class="menu">
            <li>
              <a href="#slide7">1</a>
            </li>
            <li>
              <a href="#slide8">2</a>
            </li>
             <li>
              <a href="#slide9">3</a>
            </li>
          </ul>
         
        </div>
      </div>
  </section> 
  </section>
    <div class="imagen-light">
        <img src="img/close.svg" alt="" class="close">
        <img src="" alt="" class="agregar-imagen">
    </div>
    <section class="contenedor" id="expertos">
      <h2 class="subtitulo">Modulos</h2>
      <section class="experts">
          <div class="cont-expert">
              <img src="img/Icono.regresar.png" alt="">
              <h3 class="n-expert"></h3>
              <a href ="index.php">Regresar</a>.
          </div> 
              <div class="cont-expert">
                <img src="img/Operaciones.jpg" alt="">
                <h3 class="n-expert"></h3>
                <a href ="Operaciones_Basicas.html">Operaciones Basicas</a>.
              </div>
              <div class="cont-expert">
                <img src="img/Geometria.jpg" alt="">
                <h3 class="n-expert"></h3>
                <a href ="Geometria.html">Geometria</a>.
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
                 var Conj1 = 3;
                 var resUs = parseInt(document.getElementById("user1").value);
                 var puntaje = document.getElementById("mostrar_puntaje");
                 let resuelto = false;
                 if(resuelto == true){
                    alert("Ya lo resolvió")
                 }else{
                    if(resUs == Conj1){
                      alert("Bien");
                      resuelto = true;
                      var pun = 10;
                      puntaje.innerHTML += pun;
                    }else{
                      alert("Mal")
                    }
                 }
             }    
       function Operacion1() {
                 var Conj2 = 2;
                 var resUs1 = parseInt(document.getElementById("user2").value);
                 var puntaje = document.getElementById("mostrar_puntaje");
                 let resuelto = false;
                 if(resuelto == true){
                    alert("Ya lo resolvió")
                 }else{
                    if(resUs1 == Conj2){
                      alert("Bien");
                      resuelto = true;
                      var pun = 10;
                      puntaje.innerHTML += pun;
                    }else{
                      alert("Mal")
                    }
                 }
             } 
             function Operacion2() {
                 var Conj3 = 4;
                 var resUs = parseInt(document.getElementById("user3").value);
                 var puntaje = document.getElementById("mostrar_puntaje");
                 let resuelto = false;
                 if(resuelto == true){
                    alert("Ya lo resolvió")
                 }else{
                    if(resUs == Conj3){
                      alert("Bien");
                      resuelto = true;
                      var pun = 10;
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