<?php
    $conexion=mysqli_connect("localhost","root","","mariasarandondb")OR DIE ("Error: No es posible establecer la conexión");
?>
<html>
    <head>
        <title>Taller / Clases</title>
        <link rel="icon" type="" href="Imagenes/iconoPag.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light navBar" style="position:relative;">
      <button class="navbar-toggler" id="boton" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mx-auto tituloNav titulo2" style="display: block;" href="index.php">Maria Sarandon</a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto">
            <a class="navbar-brand mx-auto tituloNav titulo1" href="index.php">Maria Sarandon</a>
            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle menuDesplegable" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pinturas</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php
                          $i=0;
                          $consulta= "SELECT nombreSerie from serie";
                          $datos= mysqli_query ($conexion,$consulta);
                          while($fila =mysqli_fetch_array($datos)){
                              $i++;
                              $nombreSerie=$fila['nombreSerie'];
                              echo '<a data-target="pinturas.php?numeroSerie='.$i.'" class="dropdown-item" href="pinturas.php?numeroSerie='.$i.'">Serie '.$nombreSerie.'</a>';
                          }
                      ?> 
                  </div> 
              </li>
              <li class="nav-item item">
                  <a class="nav-link" href="workInProgress.php">Work in Progress</a>
              </li>
              <li class="nav-item item">
                  <a class="nav-link" href="cv.php">CV</a>
              </li>
              <li class="nav-item item">
                  <a class="nav-link" href="tallerYClases.php">Taller / Clases</a>
              </li>
              <li class="nav-item item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="container" style="width: 70%;padding: 0px">
      <h1>Taller de Dibujo y Pintura</h1>
      <h4>clases</h4>
    </div>
      <div class="container" style="position:relative;background-color: black;width: 70%">
        <div class="texto" style="padding-top: 20px;">
          <label style="color: white;display:block">
              Horario clases por la mañana y tarde/noche. <br>
              Adultos y niños <br>
              Clases grupales
          </label>
        </div>
        <div class="texto">
          <label style="padding-top: 20px;color: white;display: block;width: 30%"><b>En un clima que propicie la investigación, la charla y el intercambio fluído, experimentación, el Taller de dibujo y pintura, que se dicta hace mas de 8 años, es un espacio el cual cada alumno indaga en el desarrollo de su proyecto personal.</b></label> 
        </div>
        <div class="texto" style="padding-top: 20px;padding-bottom: 20px;">
          <label style="display: block;color: white;">Contacto
          mariasarandon@hotmail.com
  ​        </label>
        </div>
        <section class="variable slider sliderTYC">
          <div><img src="Imagenes/TYC/1.png"></div>
          <div><img src="Imagenes/TYC/2.png"></div>
          <div><img src="Imagenes/TYC/3.png"></div>
          <div><img src="Imagenes/TYC/4.png"></div>
          <div><img src="Imagenes/TYC/5.png"></div>
          <div><img src="Imagenes/TYC/6.png"></div>
          <div><img src="Imagenes/TYC/7.png"></div>
          <div><img src="Imagenes/TYC/8.png"></div>
        </section>
      </div>
  </body>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="slick-master/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      $('#menu-main > li > .dropdown-toggle').click(function () {
          window.location = $(this).attr('href');
          });
      $(document).on('ready', function() {
      $(".variable").slick({
        dots: false,
        infinite: true,
        variableWidth: true,
        adaptiveHeight: true,
        autoplay: true,
        slidesToShow: 1,
        nextArrow: "<button type='button' class='slick-prev'></button>",
      });
      $(".workInProgress").css("display","block");
      });
      function agrandarBarra(){//para el menu desplegable
        if($(".navBar").hasClass("barraExpandida")){
          $(".navBar").removeClass("barraExpandida")
        }
        else{
          $(".navbar"). addClass("barraExpandida");
        }
      }
      if($(window).width() < 977){
        $(".titulo1").remove();
      }
      else{
        $(".titulo2").remove();
      }
      $("#boton").click(agrandarBarra);

    </script>
  </body>
</html>