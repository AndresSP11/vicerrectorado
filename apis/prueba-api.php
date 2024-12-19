<?php

include_once('../config/config.php');
session_start();

$db = conectarDB();

/* if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
} */



    $query='SELECT u.id_usuario, u.nombre 
    AS nombre_usuario, u.correo, r.nombre 
    AS nombre_rol, c.condicion 
    AS condicion_categoria, c.contrato 
    AS contrato_categoria 
    FROM usuario u 
    INNER JOIN rol_usuario ru 
    ON u.id_usuario = ru.usuario_id 
    INNER JOIN rol r 
    ON ru.rol_id = r.id_rol 
    INNER JOIN categoria_contrato c 
    ON u.cat_cont_id = c.id_cat_cont 
    WHERE r.id_rol = 1;';

    $ejecuta= mysqli_query($db, $query);

    $html="<table/><tr><th>Codigo</th><th>Nombre</th><th>Rol</th><th>Contrato</th></tr>";
           
    while ($resultado = mysqli_fetch_assoc($ejecuta)) {
             
        $variable_1=$resultado['id_usuario'];
        $variable_2=$resultado['nombre_usuario'];
        $variable_3=$resultado['nombre_rol'];
        $variable_4=$resultado['contrato_categoria'];
        $html.="
                <tr>
                    <td>
                    <a href='../pages/receta-id.php?id_receta=$variable_1' style='color:#195780'>
                    $variable_1
                    </a>
                    </td>
                    <td>$variable_2</td>
                    <td>$variable_3</td>
                    <td>$variable_4</td>   
                </tr>
        ";
    }
    $html.='</table>';
    echo $html;

?>