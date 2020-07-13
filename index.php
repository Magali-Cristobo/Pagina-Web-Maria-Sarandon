<html>
    <head>
        <title>Home | Maria</title>
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
    </head>

    <body class="bodyIndex">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navBar">
        <button class="navbar-toggler" id="boton" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto tituloNav titulo2" style="display: block;" href="#">Maria Sarandon</a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <a class="navbar-brand mx-auto tituloNav titulo1" href="#">Maria Sarandon</a>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pinturas</a>
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
                    <a class="nav-link" href="#">Work in Progress</a>
                </li>
                <li class="nav-item item">
                    <a class="nav-link" href="#">CV</a>
                </li>
                <li class="nav-item item">
                    <a class="nav-link" href="#">Taller / clases</a>
                </li>
                <li class="nav-item item">
                  <a class="nav-link" href="#">Contacto</a>
              </li>
            </ul>
          </div>
        
    </nav>
        <div class="frase">
            <p>Mi obra pictórica, es un homenaje contemporáneo al grabado botánico antiguo, que le suma tamaño, y se adapta al soporte de la tela con colores vivos y planos, jerarquizando aquellos dibujos minuciosos y de estudio.
            </br> <i>María Sarandon</i></p>
        </div>
        <div class="frase2">
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
          if ($(window).width() < 770) {
            $(".borrar").remove();
            $(".borrar").remove();
            $(".pintura").removeClass("col-lg-2");
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
        </script>
    
    </body>
</html>