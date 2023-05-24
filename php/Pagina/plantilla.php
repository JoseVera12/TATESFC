<?php
require_once("../Database/Database.php");
$resultado = Database::getAllJugadores();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Vera, Juan Robayo y David Chavarría">
    <meta name="description" content="Página web oficial de TATES FC">
    <meta name="keywords"
        content="TATES, FUTBOL, FUTBOL7, BALON, JUGADORES, ENTRENADOR, PORTERO, TATESFC, IMF, IMF SMART EDUCATION, PROYECTO, ESTADIO, BOTAS">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/plantillaa.css">
    <link rel="stylesheet" href="../../fontawesome-free-6.2.1-web/css/all.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/emblema.png">
    <title>TATES FC</title>

</head>

<body>
    <nav>
        <a href="inicio.php">
            <li><i class="fa-solid fa-house"></i><br>Inicio</li>
        </a>
        <a href="plantilla.php" id="pln">
            <li><i class="fa-solid fa-futbol"></i><br>Plantilla</li>
        </a>
        <a href="tienda.php">
            <li><i class="fa-solid fa-shop"></i><br>Tienda TFC</li>
        </a>
        <a href="pruebasacceso.php">
            <li><i class="fa-brands fa-wpforms"></i><br>Pruebas de acceso</li>
        </a>
    </nav>

    <header>
        <img class="foto1" src="../../Imagenes/plantillag.png" alt="TATES FC">
        <div class="bloque1">
            <div class="caja1">
                <h1>PLANTILLA</h1>
            </div>
        </div>
    </header>

    <div class="buscador">
        <div class="search">
            <input type="text" id="search-input" class="busca" placeholder="Filtra por nombre o por posicion">
            <button type="submit" class="btnBuscar">
                 <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <div class="container">
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Alberto"){
                    echo  "<h4>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "portero"){
                    echo "<h3>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 13){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Jose"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "portero"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 21){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?>    
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Adrian"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "defensa"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 15){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Diego"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "defensa"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 4){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Andres"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "defensa"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 12){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Ivan"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "defensa"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 18){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Alexis"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "mediocentro"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 7){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?>
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Sergio"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "mediocentro"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 8){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Hugo"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "mediocentro"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 6){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Gabriel"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "mediocentro"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 11){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Alvaro"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "delantero"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 97){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
            <?php 
                $resultado = Database::getAllJugadores();
                echo "<div class='card'>";
                echo "<div class='border'>";
                foreach( $resultado as $row){
                    if($row["nombre"] == "Jesus"){
                    echo  "<h4 class='player-name'>" . $row["nombre"] . " " . $row["apellido"] . "</h4>";
                    }
                    if($row["posicion"] == "delantero"){
                    echo "<h3 class='team-name'>" . $row["posicion"] . "</h3>"; 
                    } 
                    if($row["dorsal"] == 10){
                    echo "<h5>" . $row["dorsal"] . "</h5>"; 
                    } 
                }
                echo "<ul>";
                echo "<li><i class='fab fa-twitter'></i></li>";
                echo "<li><i class='fab fa-facebook'></i></li>";
                echo "<li><i class='fab fa-instagram'></i></li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            ?> 
    </div>
    <div id="cosas">

        <a href="https://www.instagram.com/tates.fc/?hl=es">
            <img class="redes" src="https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c521.png" alt="Instagram">
        </a>
        <a href="https://twitter.com/fctates">
            <img class="redes" src="https://cdn-icons-png.flaticon.com/512/4096/4096132.png" alt="Twitter">
        </a>
        <a href="https://www.youtube.com/@madridfutbol7574">
            <img class="redes" src="https://logodownload.org/wp-content/uploads/2014/10/youtube-logo-5-2.png" alt="Youtube">
        </a>
    </div>
</body>
<footer>
    <div>
        <p id="ptr">PATROCINADORES</p>
        <div class="patro">
            <img class="patrocinadores" src="https://mercadona.es/web-display-img.png" alt="Mercadona">
            <img class="patrocinadores" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Burger_King_logo_%281999%29.svg/2024px-Burger_King_logo_%281999%29.svg.png" alt="Burger King">
            <img id="foto3" class="patrocinadores" src="../../Imagenes/aguardiente.png" alt="Aguardiente Antioqueño">
        </div>

    </div>
    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.2809767285867!2d-3.6801488842823917!3d40.46904856037911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228eb37e45ebd%3A0x9bfa83f7479125e0!2sColegio%20Nuestra%20Se%C3%B1ora%20del%20Recuerdo!5e0!3m2!1ses!2ses!4v1680277686820!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <address><i class="fa-solid fa-location-dot"></i>Estamos en el campo de futbol El Recuerdo</address>
    </div>
</footer>

</body>
<script src="../../js/plantilla.js"></script>
</html>
    