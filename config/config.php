<?php
// config.php
function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', '', 'vic-lectivo(2)');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 
    return $db;
}   

?>