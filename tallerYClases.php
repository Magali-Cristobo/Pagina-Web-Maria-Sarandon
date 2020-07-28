<?php
    $conexion=mysqli_connect("localhost","root","","mariasarandondb")OR DIE (
                              "Error: No es posible establecer la conexión"
                              );
?>
<html>
    <head>
        <title>Taller / Clases</title>
        <link rel="icon" type="" href="Imagenes/iconoPag.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link type="text/css" rel="stylesheet" href="estilo2.css">    
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="estilo2.css">
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
    <div class="container" >
      <h1>Taller de Dibujo y Pintura</h1>
      <h4>clases</h4>
      <div class="container" style="background-color: black;position: absolute; width: 80%">
        <label style="color: white;display:block">
          Horario clases por la mañana y tarde/noche. <br>
          Adultos y niños <br>
          Clases grupales
        </label>
        <label style="color: white;display: block;width: 40%"><b>En un clima que propicie la investigación, la charla y el intercambio fluído, experimentación, el Taller de dibujo y pintura, que se dicta hace mas de 8 años, es un espacio el cual cada alumno indaga en el desarrollo de su proyecto personal.</b></label> 
        <label style="display: block;color: white;">Contacto
        mariasarandon@hotmail.com
​        </label>         
        <section class="variable slider" style="float: right;  margin: 0px auto;">
          <div><img src="Imagenes/WorkInProgress/1.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/2.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/3.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/4.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/5.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/6.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/7.jpeg"></div>
        </section>
      </div>
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