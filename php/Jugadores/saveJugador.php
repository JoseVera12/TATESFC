<?php

$datos = [$_POST['nombre'],$_POST['precio'], $_POST['stock'], $_POST['posicion']];

require_once ('../Database/Database.php');

Database::saveProductos($datos);

header('Location: ../Pagina/admin.php');

?>