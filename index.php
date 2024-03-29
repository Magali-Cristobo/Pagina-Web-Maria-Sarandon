<html>
    <head>
        <title>Home | Maria</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="icon" type="" href="Imagenes/iconoPag.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link type="text/css" rel="stylesheet" href="estilo.css">    
    </head>
    <body class="bodyIndex">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navBar">
        <button class="navbar-toggler" id="boton" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand tituloNav titulo2" href="index.php" id="nombreMaria">Maria Sarandon</a>
        <a class="navbar-brand tituloNav titulo2" id="artistaVisual" >Artista Visual</a>        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto barra">
            <a class="navbar-brand tituloNav  titulo1" href="index.php" id="nombreMaria">Maria Sarandon</a>
              <a class="navbar-brand tituloNav titulo1" id="artistaVisual" >Artista Visual</a>
                <li class="nav-item dropdown item">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Obras</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php 
                            $i=0;
                            $conexion=mysqli_connect("localhost","root","","mariasarandondb");
                            $consulta= "SELECT nombreSerie from serie";
                            $datos= mysqli_query ($conexion,$consulta);
                            while($fila =mysqli_fetch_array($datos)){
                                $i++;
                                $nombreSerie=$fila['nombreSerie'];
                                echo '<a class="dropdown-item" href="pinturas.php?numeroSerie='.$i.'">Serie '.$nombreSerie.'</a>';
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
        <div class="frase">
            <p id="laFrase">Mi obra pictórica, es un homenaje contemporáneo al grabado botánico antiguo, que le suma tamaño, y se adapta al soporte de la tela con colores vivos y planos, jerarquizando aquellos dibujos minuciosos y de estudio.
            </br> <i>María Sarandon</i></p>
        </div>
        <div id="frase2" class="frase2">
            <a>Telefono: +54 9 11 5615-9321</a>
            <a class="auto-generated-link" data-auto-recognition="true" data-content="mariasarandon@hotmail.com" 
            href="mailto:mariasarandon@hotmail.com" data-type="mail"><b>mariasarandon@hotmail.com</b></a>
        </div>
    </body>
    <script>
        function agrandarBarra(){
            if($(".navBar").hasClass("barraExpandida")){
              $(".navBar").removeClass("barraExpandida")
            }
            else{
              $(".navbar"). addClass("barraExpandida");
            }
          }
          if ($(window).width() < 992) {
            $(".pintura").addClass('pinturaCelular');
            $(".titulo1").remove();
          }
          else{
            $(".titulo2").remove();
          }
          $("#boton").click(agrandarBarra);
        $('#menu-main > li > .dropdown-toggle').click(function () {
            window.location = $(this).attr('href');
        });
        // 
        $(function(){
          $(document).bind("contextmenu",function(e){
            return false;
          });
        });
        </script>
    
    </body>
</html>