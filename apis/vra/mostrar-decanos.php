<?php

include_once('../../config/config.php');
session_start();

$db = conectarDB();

/* if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
} */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
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
    $html="<table class='tabla'><thead><tr><th>Codigo</th><th>Nombre</th><th>Rol</th><th>Contrato</th></tr></thead>";
    while ($resultado = mysqli_fetch_assoc($ejecuta)) {
        $variable_1=$resultado['id_usuario'];
        $variable_2=$resultado['nombre_usuario'];
        $variable_3=$resultado['nombre_rol'];
        $variable_4=$resultado['contrato_categoria'];
        $html.="
                <tr>
                    <td>
                    <a href='' style='color:#195780'>
                    $variable_1
                    </a>
                    </td>
                    <td>$variable_2</td>
                    <td class='cell-rol'>
                                <span>$variable_3</span>
                                <img class='edit-button' src='/imagenes/change_rol.png' alt=''>
                            </td>
                    <td>$variable_4</td>   
                </tr>
        ";
    }
    $html.='</table>';
    echo json_encode($html);
}
?>