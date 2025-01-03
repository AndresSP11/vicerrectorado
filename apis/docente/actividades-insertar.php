<?php 
include_once('../../config/config.php');
session_start();

$db = conectarDB();

header('Content-Type: application/json'); // Establecer el tipo de contenido JSON

session_start();

/* FALTA LA PARTE DE VALIDACION DEL USUARIO CON ID , PARA VERIFICAR SI EXISTE O NO */


/* OPTAREMOS HACER USO DE UN DATO FANTASMA */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data=$_POST['data'];

    $data=json_decode($data,true);

    foreach ($data as $actividad) {
          $name=mysqli_escape_string($db,$actividad['name']);
          $bloque=mysqli_escape_string($db,$actividad['bloque']);
          $horas=mysqli_escape_string($db,$actividad['horas']);
          $doc_evidencia=mysqli_escape_string($db,$actividad['doc_evidencia']);
          $situacion=mysqli_escape_string($db,$actividad['situacion']);
          $cumplimiento=mysqli_escape_string($db,$actividad['cumplimiento']);
          $periodo=mysqli_escape_string($db,$actividad['periodo']);          
             
          $query=

    }



    echo(
        
        
        json_encode($data));
      
    
    }
 

?>