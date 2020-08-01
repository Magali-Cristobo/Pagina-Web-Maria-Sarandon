<?php
    $numeroSerie=$_GET["numeroSerie"];
    $conexion=mysqli_connect("localhost","root","","mariasarandondb")OR DIE (
        "Error: No es posible establecer la conexión"
        );
    $queryFondo=mysqli_query($conexion, "SELECT colorFondo FROM serie where idSerie=$numeroSerie");
    $rowFondo=mysqli_fetch_row($queryFondo);
?>
<html>
    <head>
        <title>Pinturas</title>
        <link rel="icon" type="" href="Imagenes/iconoPag.png">
        <meta charset="UTF-8">
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
    </head>
    <body class="body" style="background-color:<?php echo $rowFondo[0] ?>; margin-bottom: 2%;margin: 0; ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navBar" style="position:relative;">
        <button class="navbar-toggler" id="boton" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand tituloNav titulo2" style="display: block;" href="index.php">Maria Sarandon</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <a class="navbar-brand mx-auto tituloNav titulo1" href="index.php">Maria Sarandon zfdgdfgfdg</a>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menuDesplegable" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Obras</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                            mb_http_output('UTF-8');
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
                    <a class="nav-link" href="tallerYClases.php#">Taller / Clases</a>
                </li>
                <li class="nav-item item">
                  <a class="nav-link" href="index.php#frase2">Contacto</a>
              </li>
            </ul>
          </div>
        
    </nav>
    <div class="contenedor">
            <?php
                    $consulta="select nombreArchivo, descripcion, nombre from pintura where Serie_idSerie=$numeroSerie";
                    $result = mysqli_query($conexion, "SELECT nombreSerie FROM serie WHERE idSerie=$numeroSerie");
                    $row = mysqli_fetch_row($result);
            ?>
        <p class="titulo"><?php echo $row[0] ?></p>
            <?php
                    $datos=mysqli_query($conexion,$consulta);
                    $numeroImagen=1;
                    while($fila=mysqli_fetch_array($datos)){
                        $imagen=$fila["nombreArchivo"];
                        $titulo=$fila["nombre"];
                        $descripcion=$fila["descripcion"];
                        if($numeroImagen==1){
                            echo "<div class='row fila'>
                            <div class='contenedorIndividual'>
                            <div class='pintura'>
                                <div class='imagen'>
                                    <img src='$imagen' style='cursor:pointer'>
                                </div>
                                <div class='cuadro'>
                                    <p class='tituloCuadro'>$titulo</p>
                                    <p class='descripcion'>$descripcion</p>
                                </div>
                            </div>
                            </div>";
                            $numeroImagen++;
                        }
                        else if($numeroImagen==2){
                            $numeroImagen++;
                            echo "
                            <div class='contenedorIndividual'>
                                <div class='pintura'>
                                    <div class='imagen'>
                                        <img src='$imagen' style='cursor:pointer'>
                                    </div>
                                    <div class='cuadro'>
                                        <p class='tituloCuadro'>$titulo</p>
                                        <p class='descripcion'>$descripcion</p>
                                    </div>
                                </div>
                            </div>";
                        }
                        else{
                            $numeroImagen=1;
                            echo "
                            <div class='contenedorIndividual'>
                                <div class='pintura'>
                                    <div class='imagen'>
                                        <img src='$imagen' style='cursor:pointer'>
                                    </div>
                                    <div class='cuadro'>
                                        <p class='tituloCuadro'>$titulo</p>
                                        <p class='descripcion'>$descripcion</p>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        }
                    }
                    if($numeroImagen==1 || $numeroImagen==2){
                        echo"</div>";
                    }
                ?>
                </div>
          </div> 
          <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <div class="overlay-content">
            </div>
          </div> 
        <script>
          //funciones para el modal 2
          var modalMostrado=false;
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
          $('#menu-main > li > .dropdown-toggle').click(function () {
            window.location = $(this).attr('href');
          });
          function agrandarBarra(){//para el menu desplegable
            if($(".navBar").hasClass("barraExpandida")){
              $(".navBar").removeClass("barraExpandida")
            }
            else{
              $(".navbar"). addClass("barraExpandida");
            }
          }
          if ($(window).width() < 770) {//para el modo celular
            $(".pintura").addClass('pinturaCelular');
          }
          if($(window).width() < 977){
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
