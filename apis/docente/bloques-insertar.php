<?php
// Incluye la configuración de tu base de datos
include_once('../../config/config.php');

// Inicia la sesión (solo una vez)
session_start();

// Conexión a la base de datos
$db = conectarDB();

$profesor_id='USR016';
// Establecer el tipo de contenido JSON
header('Content-Type: application/json');

// Verifica si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recibe y decodifica los datos de la solicitud
    $data = isset($_POST['data']) ? $_POST['data'] : null;
    $ciclo = isset($_POST['cycle']) ? $_POST['cycle'] : null;

    if ($data && $ciclo) {
        // Decodificar JSON recibido
        $data = json_decode($data, true);

        /* Validaremos la parte de la data para ver si hacemos INSERT O UPDATE */

        $query="SELECT id_bloque FROM bloque WHERE ciclo='$ciclo' AND profesor_id='$profesor_id'";

        $result_id_ciclo = mysqli_query($db, $query);


        // Verificar si hay resultados
        if ($result_id_ciclo) {
            $ids_bloque = [];
            while ($row = mysqli_fetch_assoc($result_id_ciclo)) {
                // Almacenar cada id_bloque en el arreglo
                $ids_bloque[] = $row['id_bloque'];
            }
        }
        // Validar si los datos fueron correctamente decodificados
        if (json_last_error() === JSON_ERROR_NONE) {
            if($result_id_ciclo->num_rows>0){
                $count=0;
                foreach ($data as $bloque) {
                    $id_init=$ids_bloque[$count];
                    $name = mysqli_escape_string($db, $bloque['name'])?? null;
                    $horas = mysqli_escape_string($db, $bloque['horas']) ?? null;
                   // Procesa los datos aquí (como guardarlos en la base de datos)
                    $query = "UPDATE `bloque` SET `nombre` = '$name', `horas` = '$horas'
                    WHERE id_bloque = '$id_init'";

                    $result = mysqli_query($db, $query);
                    $count++;
    
                    if (!$result) {
                        echo json_encode([
                            'status' => 'error',
                            'message' => 'Error al insertar los datos en la base de datos.'
                        ]);
                        exit;
                    }
                }
            }else{
                foreach ($data as $bloque) {
                    $name = mysqli_escape_string($db, $bloque['name'])?? null;
                    $horas = mysqli_escape_string($db, $bloque['horas']) ?? null;
                   // Procesa los datos aquí (como guardarlos en la base de datos)
                    $query = "INSERT INTO `bloque` (`nombre`, `horas`, `ciclo`, `profesor_id`) 
                    VALUES ('$name', '$horas', '$ciclo', '$profesor_id')";
                    $result = mysqli_query($db, $query);
    
                    if (!$result) {
                        echo json_encode([
                            'status' => 'error',
                            'message' => 'Error al insertar los datos en la base de datos.'
                        ]);
                        exit;
                    }
                }
            }
            // Devuelve una respuesta exitosa
            echo json_encode([
                'status' => 'success',
                'message' => 'Datos procesados correctamente.',
                'cycle' => $ciclo
            ]);
        } else {
            // Error al decodificar JSON
            echo json_encode([
                'status' => 'error',
                'message' => 'El JSON recibido es inválido.'
            ]);
        }
    } else {
        // Respuesta en caso de que falten parámetros
        echo json_encode([
            'status' => 'error',
            'message' => 'Faltan parámetros necesarios.'
        ]);
    }
} else {
    // Respuesta si la solicitud no es POST
    echo json_encode([
        'status' => 'error',
        'message' => 'Método no permitido.'
    ]);
}
?>
