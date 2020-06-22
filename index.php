<html>
    <head>
        <title>Home | Maria</title>
        <link rel="icon" type="" href="Imagenes/iconoPag.png">
        <link type="text/css" rel="stylesheet" href="estilo.css">
    </head>

    <body class="body">
        <ul class="nav">
            <img id="logoInsta" alt="Instagram - Black Circle" data-type="image" 
            itemprop="image" src="https://static.wixstatic.com/media/e1aa082f7c0747168d9cf43e77046142.png/v1/fill/w_49,h_49,al_c,q_85,usm_0.66_1.00_0.01/e1aa082f7c0747168d9cf43e77046142.webp" 
            style="width: 39px; height: 39px; object-fit: cover;">
            <b class="maria"><a  href="index.html">María Sarandon</a></b>
            <li  class="items">
                <a href="#">Pinturas</a>
                <ul class="subItems">
                <?php 
                    $i=0;
                    $conexion=mysqli_connect("localhost","root","","mariasarandondb");
                    $consulta= "SELECT nombreSerie from serie";
                    $datos= mysqli_query ($conexion,$consulta);
                    while($fila =mysqli_fetch_array($datos)){
                        $i++;
                        $nombreSerie=$fila['nombreSerie'];
                        echo '<li><a href="pinturas.php?numeroSerie='.$i.'">'.$nombreSerie.'</a></li>';

                    }
                ?> 
                </ul>
            </li>
            <li  class="items"><a href="workInProgress.html">Work in Progress</a></li>
            <li  class="items"><a href="cv.html">CV</a></li>
            <li  class="items"><a href="tallerYClases.html">Taller / Clases</a></li>
            <li  class="items"><a href="about.asp">Contacto</a></li>

        </ul>
        <div class="frase">
            <p>Mi obra pictórica, es un homenaje contemporáneo al grabado botánico antiguo, que le suma tamaño, y se adapta al soporte de la tela con colores vivos y planos, jerarquizando aquellos dibujos minuciosos y de estudio.
            </br> <i>María Sarandon</i></p>
        </div>
        <div class="frase2">
            <a class="auto-generated-link" data-auto-recognition="true" data-content="mariasarandon@hotmail.com" 
            href="mailto:mariasarandon@hotmail.com" data-type="mail"><b>mariasarandon@hotmail.com</b></a>
        </div>
    </body>

</html>