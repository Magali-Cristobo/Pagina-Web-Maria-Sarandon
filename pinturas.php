<html>
    <head>
        <title>Pinturas</title>
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

    <body class="body" style="background-color:#7A7ACC; margin-bottom: 2%;margin: 0; ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navBar" style="position:relative;">
        <button class="navbar-toggler" id="boton" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <a class="navbar-brand mx-auto tituloNav" href="#">Maria Sarandon</a>
              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menuDesplegable" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pinturas</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php 
                            $i=0;
                            $conexion=mysqli_connect("localhost","root","","mariasarandondb")OR DIE (
                                "Error: No es posible establecer la conexión"
                                );
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
    <div class="container contenedor">
    <p style="font-family: 'Nimbus Sans TW01Con'; font-size: 25px;margin-top: 5%; margin-bottom: 5%;">Ensayos Orgánicos</p>
            <?php
                $conexion=mysqli_connect("localhost","root","","mariasarandondb")OR DIE (
                    "Error: No es posible establecer la conexión"
                    );
                    $numeroSerie=$_GET["numeroSerie"];
                    $consulta="select nombreArchivo, descripcion, nombre from pintura where Serie_idSerie=$numeroSerie";
                    $datos=mysqli_query($conexion,$consulta);
                    $cantImagenes=0;
                    $numeroImagen=1;
                    while($fila=mysqli_fetch_array($datos)){
                        $imagen=$fila["nombreArchivo"];
                        $titulo=$fila["nombre"];
                        $descripcion=$fila["descripcion"];
                        if($numeroImagen==1){
                            echo "<div class='row'>
                            <div class='col-lg-1 borrar'></div>
                            <div class='pintura col-lg-2'>
                                <div class='imagen'>
                                    <img src='$imagen'>
                                </div>
                                <div class='cuadro'>
                                    <label class='titulo'>$titulo</label>
                                    <label class='descripcion'>$descripcion</label>
                                </div>
                            </div>";
                            $numeroImagen++;
                            $cantImagenes++;
                        }
                        else if($numeroImagen==2){
                            $numeroImagen=1;
                            echo "<div class='col-lg-4 borrar'></div>
                            <div class='pintura col-lg-2'><div class='imagen'>
                            <img src='$imagen'>
                            </div>
                            <div class='cuadro'>
                                <label class='titulo'>$titulo</label>
                                <label class='descripcion'>$descripcion</label>
                            </div>
                            </div>
                            </div>";
                            $cantImagenes++;
                        }
                    }
                    if($cantImagenes%2!=0){
                        echo"</div>";
                    }
                ?>
                </div>
    <script>
        $('#menu-main > li > .dropdown-toggle').click(function () {
            window.location = $(this).attr('href');
        });
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
          }
          $("#boton").click(agrandarBarra);
        </script>
    
    </body>
</html>
