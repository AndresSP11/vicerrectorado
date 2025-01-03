<?php 
    echo('Estamos en cycle');
    include_once('../../config/config.php');
    $db = conectarDB();
    
    var_dump($_GET);
    $id = $_GET['cycle'];
   
    if(empty($id)){
        header('Location: /pages/docente/02_gestion-plan-actividades.php');
    }

    echo($id);
   
    /* EN ESTA PARTE SE VERIFICARA SI AL PARTE DEL CICLO EXISTE O NO EN LA TABLA
     ASI QUE AQUI VERIFICAREMSOS AL DATA DEL $ID PRIMERO */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Plan de Actividades</title>
    <link rel="stylesheet" href="/styles/docente/02_gestion-plan-actividades.css">
    <!-- ############################################################ FONTS #################################################################### -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

    <div class='container-cuerpo'>
        <header>
            <!-- Imagenes. -->
            <img src="/imagenes/logouni.png" alt="">
            <div class="cabezal">
                <p class="title-vra">VRA UNI</p>
                <div class="barraV_father">
                    <div class="barraV"></div>
                    <div class="barraV"></div>
                    <div class="barraV"></div>
                    <div class="barraV"></div>
                    <div class="barraV"></div>
                    <div class="barraV"></div>
                </div>
                <div class="left-barraV_father"></div>
                <div class="cont-user">
                    <div class="user-data">
                        <p>Rol: Docente</p>
                        <p>Jorge Canchano Minaya</p>
                    </div>
                    <div>
                        <i class='bx bxs-user log-user'></i>
                    </div>
                </div>
            </div>
        </header>

        <section class="container">
            <div class="title-cont">
              <p>Registro de Actividades no Lectivas</p>   
            </div>

            <div class="search">
                <div class="left">
                    <div class="left_children">
                        <label for="search-type" class="search-text">Horas registradas</label>
                        <label for="search-type" class="state-text" >40 horas</label>
                    </div>
                    <div class="left_children">
                        <label for="search-type" class="search-text">Total de horas</label>
                        <label for="search-type" class="state-text"><p id="total-horas"></p><span>Horas</span></label>
                    </div>
                </div>
                
                <div class="left">
                    <div class="right_children">
                        <label for="search-type" class="search-text">Fecha límite</label>
                        <label for="search-type" class="state-text">24/10/2024</label>
                    </div>
                    <div class="right_children">
                        <label for="search-type" class="search-text">Estado</label>
                        <label for="search-type" class="state-text">No cumplido</label>
                    </div>
                </div>
            </div>

            <div class="tabla-container">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th rowspan="2" class="vert">Condición</th>
                            <th rowspan="2" class="vert">Categoría o Tipo de Contrato</th>
                            <th rowspan="2" class="vert">D.H. o Clasificación</th>
                            <th rowspan="2" class="vert">Total de horas (*)</th>
                            <th colspan="3">Actividad lectiva</th>
                            <th colspan="12">Actividades no lectiva (horas por semana)</th>
                        </tr>
                        <tr>
                            <th class="vert">Teoría</th>
                            <th class="vert">Práctica</th>
                            <th class="vert">Reducción de Carga Lectiva</th>
                            <th class="vert" >Preparación y evaluación</th>
                            <th class="vert">Capacitación continua</th>
                            <th class="vert">Materiales formativos</th>
                            <th class="vert">Investigación</th>
                            <th class="vert">Investigación no monetaria</th>
                            <th class="vert">Responsabilidad Social y </br> Extensión Universitaria</th>
                            <th class="vert">Tutoría (*)</th>
                            <th class="vert">Asesoría Académica</br>(Retroalimentación) (*)</th>
                            <th class="vert">Asesoría de tesis (*)</th>
                            <th class="vert">Asesoría de estudiantes</br>en proyectos de inv.</th>
                            <th class="vert">Gestión universitaria</th>
                            <th class="vert">Actividades</br>Administrativas comp.*</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>N</td>
                            <td>AX</td>
                            <td>TC-40</td>
                            <td>44</td>
                            <td>50</td>
                            <td>12</td>
                            <td>12</td>
                            <td><input class="input-table" type="text" id="prep-eva" value="0"></td>
                            <td><input class="input-table" type="text" id="capa-cont" value="0"></td>
                            <td><input class="input-table" type="text" id="mate-form" value="0"></td>
                            <td><input class="input-table" type="text" id="inve" value="0"></td>
                            <td><input class="input-table" type="text" id="inve-mone" value="0"></td>
                            <td><input class="input-table" type="text" id="resp-soci" value="0"></td>
                            <td><input class="input-table" type="text" id="tuto" value="0"></td>
                            <td><input class="input-table" type="text" id="ases-acad" value="0"></td>
                            <td><input class="input-table" type="text" id="ases-tes" value="0"></td>
                            <td><input class="input-table" type="text" id="ases-estu" value="0"></td>
                            <td><input class="input-table" type="text" id="gest-univ" value="0"></td>
                            <td><input class="input-table" type="text" id="acti-admi" value="0" ></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="salida">
                <a href="./02_gestion-plan-actividades.php">Regresar</a>
                <button id="registrar-btn">Registrar</a>
            </div>
        </section>

    </div>
    
    <script src="/js/docente/registro-no-lectivas.js"></script>
</body>
</html>