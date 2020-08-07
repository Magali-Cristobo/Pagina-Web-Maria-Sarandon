<?php
    $conexion=mysqli_connect("localhost","root","","mariasarandondb")OR DIE ("Error: No es posible establecer la conexión");
?>
<html>
    <head>
        <title>Work in Progress</title>
        <link rel="icon" type="" href="Imagenes/iconoPag.png">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link type="text/css" rel="stylesheet" href="estilo.css">    
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="slick-master/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick-master/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light " style="position:relative;">
      <button class="navbar-toggler" id="boton" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand tituloNav titulo2" href="index.php" id="nombreMaria">Maria Sarandon</a>
        <a class="navbar-brand tituloNav titulo2" id="artistaVisual" >Artista Visual</a>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mr-auto barra">
          <a class="navbar-brand tituloNav  titulo1" href="index.php" id="nombreMaria">Maria Sarandon</a>
              <a class="navbar-brand tituloNav titulo1" id="artistaVisual" >Artista Visual</a>
                <li class="nav-item item dropdown">
                  <a class="nav-link dropdown-toggle menuDesplegable" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Obras</a>
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
                  <a class="nav-link" href="tallerYClases.php">Taller / clases</a>
              </li>
              <li class="nav-item item">
                <a class="nav-link" href="index.php#frase2">Contacto</a>
            </li>
            <li class="nav-item collapse-social-icons-dropdown"><a class="nav-link" href="https://www.instagram.com/artesarandon/" target="_blank"><i class="fab fa-instagram" style="font-size:24px"></i></a></li>
          </ul>
        </div>
  </nav>
      <div class="workInProgress">
        <h3>Work in Progress</h3>
        <section class="variable slider">
          <div><img src="Imagenes/WorkInProgress/1.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/2.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/3.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/4.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/5.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/6.jpeg"></div>
          <div><img src="Imagenes/WorkInProgress/7.jpeg"></div>
        </section>
        <p>DE WILLAM MORRIS A LOS ‘60 Se trata de temperas sobre papel en tamaño medio. Las obras recrean los empapelados del diseñador Willam Morris y los ambientes victorianos  que se van transformando en papeles de los ‘60 y ‘70 como alegoría de las profundas transformaciones que tuvo la sociedad en ese periodo. Utilizo el papel tapiz para simbolizar el espacio donde la personas llevaban su vida cotidiana y su intimidad.</p>
      </div>
      <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <div class="overlay-content">
            </div>
          </div>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="slick-master/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    var modalMostrado=false;
    $(document).on('ready', function() {
      $(".variable").slick({
        dots: false,
        infinite: true,
        variableWidth: true,
        adaptiveHeight: true,
        centerMode:true
      });
      $(".workInProgress").css("display","block");
    });
      function openNav() {
        $("#myNav").css("display","block");
        $("#myNav").css("width","100%");
        if(!modalMostrado){
            var imagen="<img src="+$(this).attr('src')+" class='imagenModal'>";
            $(".overlay-content").append(imagen);
            modalMostrado=true;
        }      
      }
      function closeNav() {
        $("#myNav").css("display","none");
        $("#myNav").css("width","0%");
        $(".imagenModal").remove();
        modalMostrado=false;
      }

    function agrandarBarra(){//para el menu desplegable
      if($(".navBar").hasClass("barraExpandida")){
        $(".navBar").removeClass("barraExpandida")
      }
      else{
        $(".navbar"). addClass("barraExpandida");
      }
    }
    if($(window).width() < 992){
      $(".titulo1").remove();
    }
    else{
      $(".titulo2").remove();
    }
    $("img").click(openNav);
    $(".closebtn").click(closeNav);
    $("#boton").click(agrandarBarra);
      </script>
    </body>
</html>