<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Carga Horaria</title>
    <link rel="stylesheet" href="/styles/decano/04_gestion-carga-horaria.css">
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
            <img src="../../imagenes/logouni.png" alt="">
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
                        <p>Rol: Decano</p>
                        <p>Mery Morales Cuellar</p>
                    </div>
                    <div>
                        <i class='bx bxs-user log-user'></i> 
                    </div>
                </div>
            </div> 
        </header>

        <section class="container">
            <div class="title-cont">
              <p>Gestión de Carga Horaria</p>   
            </div>

            <div class="search">
                <div class="left">
                    <div class="left_children">
                        <label for="search-type" class="search-text">Período:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="24-1">24-1</option>
                            <option value="24-2">24-2</option>
                        </select>
                    </div>
                </div>
                
                <div class="left">
                    <div class="right_children">
                        <label for="search-type" class="search-text">Estado de carga horaria</label>
                        <label for="search-type" class="state-text">Incompleto</label>
                    </div>
                </div>
            </div>

            <div class="excel-button">
              <button>Descargar excel</button>   
            </div>  

            <div class="tabla-container">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th rowspan="2">Apellidos y nombres</th>
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
                            <th class="vert">Preparación y evaluación</th>
                            <th class="vert">Capacitación continua</th>
                            <th class="vert">Materiales formativos</th>
                            <th class="vert">Investigación</th>
                            <th class="vert">Investigación no monetaria</th>
                            <th class="vert">Responsabilidad Social y </br> Extensión Universitaria</th>
                            <th class="vert">Tutoría (*)</th>
                            <th class="vert">Asesoría Académica </br>(Retroalimentación) (*)</th>
                            <th class="vert">Asesoría de tesis (*)</th>
                            <th class="vert">Asesoría de estudiantes </br>en proyectos de inv.</th>
                            <th class="vert">Gestión universitaria</th>
                            <th class="vert">Actividades Administrativas comp.*</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GUARNIZ ANTICONA SANDRO<br>Código UNI: 20208297K<br>DNI: 08072506</td>
                            <td>N</td>
                            <td>AX</td>
                            <td>TC-40</td>
                            <td>44</td>
                            <td>0</td>
                            <td>12</td>
                            <td>0</td>
                            <td>12</td>
                            <td>0</td>
                            <td>0</td>
                            <td>10</td>
                            <td>10</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>HERNANDEZ DIAZ VICTOR<br>Código UNI: 20148351D<br>DNI: 2551194</td>
                            <td>N</td>
                            <td>AX</td>
                            <td>TC-40</td>
                            <td>44</td>
                            <td>0</td>
                            <td>12</td>
                            <td>0</td>
                            <td>12</td>
                            <td>0</td>
                            <td>0</td>
                            <td>10</td>
                            <td>10</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="salida">
                <a href="./01_menu-decano.php">Regresar</a>
            </div>
        </section>

    </div>
    <script src="/js/decano/gestion-actividades-doc.js"></script>
</body>
</html>