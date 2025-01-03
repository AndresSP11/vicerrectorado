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

        $query="SELECT id_actividad FROM actividad WHERE ciclo='$ciclo' AND profesor_id='$profesor_id'";

        $result_id_ciclo = mysqli_query($db, $query);


        // Verificar si hay resultados
        if ($result_id_ciclo) {
            $ids_actividad = [];
            while ($row = mysqli_fetch_assoc($result_id_ciclo)) {
                // Almacenar cada id_actividad en el arreglo
                $ids_actividad[] = $row['id_actividad'];
            }
        }
        // Validar si los datos fueron correctamente decodificados
        if (json_last_error() === JSON_ERROR_NONE) {
            if($result_id_ciclo->num_rows>0){
                $count=0;
                foreach ($data as $actividad) {
                    $id_init=$ids_actividad[$count];
                    $name = mysqli_escape_string($db, $actividad['name'])?? null;
                    $bloque = mysqli_escape_string($db, $actividad['bloque']) ?? null;
                    $horas = mysqli_escape_string($db, $actividad['horas']) ?? null;
                    $doc_evidencia = mysqli_escape_string($db, $actividad['doc_evidencia']) ?? null;
                    $situacion = mysqli_escape_string($db, $actividad['situacion']) ?? null;
                    $cumplimiento = mysqli_escape_string($db, $actividad['cumplimiento']) ?? null;
                   // Procesa los datos aquí (como guardarlos en la base de datos)
                    $query = "UPDATE `actividad` SET `nombre` = 'null', `bloque` = '$bloque', 
                    `horas` = '$horas', `doc_evidencia` = '$doc_evidencia', `situacion` = '$situacion',
                    `cumplimiento` = 'null' WHERE id_actividad='$id_init'";

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
                foreach ($data as $actividad) {
                    $name = mysqli_escape_string($db, $actividad['name'])?? null;
                    $bloque = mysqli_escape_string($db, $actividad['bloque']) ?? null;
                    $horas = mysqli_escape_string($db, $actividad['horas']) ?? null;
                    $doc_evidencia = mysqli_escape_string($db, $actividad['doc_evidencia']) ?? null;
                    $situacion = mysqli_escape_string($db, $actividad['situacion']) ?? null;
                    $cumplimiento = mysqli_escape_string($db, $actividad['cumplimiento']) ?? null;
                   // Procesa los datos aquí (como guardarlos en la base de datos)
                    $query = "INSERT INTO `actividad` (`nombre`, `bloque`, `horas`, `doc_evidencia`, `situacion`, `cumplimiento`, `ciclo`, `profesor_id`) 
                    VALUES ('null', '$bloque', '$horas', '$doc_evidencia', '$situacion', 'null', '$ciclo', '$profesor_id')";
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
