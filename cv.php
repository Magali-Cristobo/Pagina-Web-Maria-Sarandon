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
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light navBar" style="position:relative;">
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
                  <a class="nav-link" href="tallerYClases.php">Taller / Clases</a>
              </li>
              <li class="nav-item item">
                <a class="nav-link" href="index.php#frase2">Contacto</a>
            </li>
            <li class="nav-item collapse-social-icons-dropdown"><a class="nav-link" href="https://www.instagram.com/artesarandon/" target="_blank"><i class="fab fa-instagram" style="font-size:24px"></i></a></li>
          </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 20px;">
      <h1>CV</h1>
      <img class="retrato" src="Imagenes/CV/retratoMARIASARANDON.webp">
      <p>
        Soy Profesora de Pintura, egresada de la Escuela Nacional de Bellas Artes. En 1988 fue maestra de Artes Plásticas en el Nivel Primario en el Instituto Inmaculada Concepción de Burzaco, y es mismo año viajé a Milán, donde vivía hasta 1991. Allí, en la Academia de Brera, realicé cursos de Dibujo y Pintura. Luego completé mi formación, asistiendo a diversos talleres y clínicas de análisis de obra con artistas argentinos.Mi obra pictórica, es un homenaje contemporáneo al grabado botánico antiguo, que le suma tamaño, y se adapta al soporte de la tela con colores vivos y planos, jerarquizando aquellos dibujos minuciosos y de estudio. Las obras mas recientes, dan un vuelco abstracto y se vincula con la cerámica, que es un soporte que estoy explorando hace poco tiempo.Participo activamente en exposiciones colectivas e individuales.Mi obra forma parte de colecciones particulares en Barcelona, Florencia, Madrid, Milán, New York y Buenos Aires.
        <br>
        <br>
        <b>FORMACIÓN</b>
        <br>
        Clínica y Análisis de obra. Prof. Gabriel Baggio 2018<br>
        Taller de cerámica. Prof. Alejandro Somaschini. 2017-2018<br>
        Clínica y Análisis de Obra. Prof. Manuel Ameztoy. 2016<br>
        Taller de pintura. Prof. Sergio Bazán. 2016-2009<br>
        Talleres de Lita Speroni y Eduardo Giussiano 1981-1985<br>
        Dibujo y Pintura. Academia de Bellas Artes de Brera, Milán, Italia. 1988-1991<br>
        Profesora Nacional de Pintura. Escuela Nacional de Bellas Artes “Prilidiano Pueyrredón”, Buenos Aires, Argentina.
        <br>
        <br>
        <b>SALONES Y EXPOSICIONES</b>
        <br>
        2016. Pinturas. Espacio de Arte Peugeot. Buenos Aires. Exposición individual<br>
        2015. Artistas por la 114. Centro Cultural Recoleta. Buenos Aires. Exposición colectiva<br>
        2014. VALOARTE. Feria de Arte. Costa Rica. Exposición colectiva<br>
        2013. Todo es verdad. Central Newbery. Buenos Aires. Exposición individual<br>
        2013. Sigue siendo verdad. Campobravo restaurante. Buenos Aires, Exposición individual<br>
        2013. Panorama Buenos Aires. Centro Cultural Recoleta. Buenos Aires. Exposición colectiva<br>
        2012. Flujo vital. Taylor Made Hotel. Buenos Aires. Exposición individual<br>
        2012. Propuesta de felicidad. Pinturas. Campobravo restaurant. Exposición individual<br>
        2011. Las Octavas. La Fábrica. Buenos Aires. Exposición colectiva<br>
        2010.Artistas por Buenos Aires Galería Nexus. Buenos Aires. Exposición colectiva<br>
        2009. Espacio Joven Chandon. arteBA. Feria de Arte Contemporáneo de Buenos Aires. Buenos Aires. Exposición colectiva <br>
        2005. Cinco artistas porteños Museo Provincial de Bellas Artes “Rosa Galisteo”, Santa Fe. Exposición colectiva<br>
        2001. De ciudades y confines. Centro Cultural Recoleta. Buenos Aires. Exposición individual<br>
        2000. Salón Nacional de Artes Visuales. Palais de Glâce. Buenos Aires. Exposición colectiva<br>
        1990. Salón Mujeres en el arte. Praxis Galería. Buenos Aires. Exposición colectiva<br>
        1996. Pinturas. Espacio Notorius. Buenos Aires. Exposición individual<br>
        1997. Pinturas. Galería del Colegio de Abogados de la Ciudad de Buenos Aires. Buenos Aires. Exposición individual<br>
        1998. Salón de Artes Plásticas “Fernán Félix de Amador”. Dirección de Cultura del Partido de Vicente López. Buenos Aires. Exposición colectiva<br>
        1998. Pinturas. Galería La Cuadra. Exposición individual<br>
        1999. Zona Espacio de arte. Exposición individual<br>
        2000. Bar Abierto. Exposición individual<br>
        2000. Salón de Otoño de la Fundación Andreani. Exposición individual<br>
        2000. Salón “UTE”. Centro Cultural General San Martín. Exposición individual<br>
        2001. IV Salón Nacional de pintura Avon. Exposición colectiva<br>
        2001. Salón Anual del Sur. Secretaría de Cultura de la Ciudad de Buenos Aires. Exposición colectiva.
        <br>
        <br>
        <b>PREMIOS, MENCIONES Y GALARDONES</b>
        <br>
        2009. 2do Premio Salón Universidad de Belgrano. Buenos Aires<br>
        1995. 3er Premio Salón Lys. Arte Joven. Espacio Giesso. Buenos Aires<br>
        1997. 2do Premio Adquisición. Salón Fundación Bollini. Buenos Aires<br>
        1995. Mención de Honor. XVIII Salón de Tango ilustrado “Sigfredo Pastor”. Buenos Aires
      </p>
    </div>
    <script type="text/javascript">
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
          if($(window).width() < 992){
            $(".titulo1").remove();
          }
          else{
            $(".titulo2").remove();
          }
          $("#boton").click(agrandarBarra);
          $(function(){
            $(document).bind("contextmenu",function(e){
              return false;
            });
          });
    </script>
  </body>
</html>