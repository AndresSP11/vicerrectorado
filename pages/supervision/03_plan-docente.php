<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Evaluaciones</title>
    <link rel="stylesheet" href="/styles/supervision/03_plan-docente.css">
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
                        <p>Rol: Supervisor</p>
                        <p>Tino Reyna Villaverde</p>
                    </div>
                    <div>
                        <i class='bx bxs-user log-user'></i> 
                    </div>
                </div>
            </div> 
        </header>

        <section class="container">
            <div class="title-cont">
              <p>Fecha de revisión: 12/06/2024</p>
            </div>

            <div class="search">
                <div class="left">
                    <div class="left_children">
                        <label for="search-type" class="search-text">Profesor</label>
                        <label for="search-type" class="state-text">Tino Reyna Villaverde</label>
                    </div>
                    <div class="left_children">
                            <label for="search-type" class="search-text">Horas</label>
                            <label for="search-type" class="state-text">20</label>
                            <button id="fechaButton">40 horas</button>
                    </div>
                </div>
                
                <div class="left">
                    <div class="right_children">
                        <label for="search-type" class="search-text">Facultad</label>
                        <label for="search-type" class="state-text">FIIS</label>
                    </div>
                    <div class="right_children">
                        <label for="search-type" class="search-text">Tipo</label>
                        <label for="search-type" class="state-text">CAS</label>
                    </div>
                </div>
            </div>

            <div class="tabla-container">
                <table class="tabla" id="tabla">
                    <thead>
                        <tr>
                            
                            <th>BLOQUE</th>
                            <th>ACTIVIDAD</th>
                            <th>HORAS</th>
                            <th>EVIDENCIA</th>
                            <th>CUMPLIMIENTO</th>
                            <th>VISTAS</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tutoría</td>
                            <td>Actividad 1</td>
                            <td>14</td>
                            <td>
                                <p class="rev_button">Mostrar</p>
                            </td>
                            <td>
                                <select class="sel-cumpl" name="search-type">
                                    <option value="SI" selected>SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </td>
                            <td class="cell-view">
                                <span>10</span>
                                <img src="/imagenes/vista.png" alt="">
                            </td>
                        </tr>
                        <!-- Agrega más filas aquí según sea necesario -->
                        <tr>
                            <td>Asesoría de tesis</td>
                            <td>Actividad 2</td>
                            <td>6</td>
                            <td>
                                <p class="rev_button">Mostrar</p>
                            </td>
                            <td>
                                <select class="sel-cumpl" name="search-type">
                                    <option value="SI" selected>SI</option>
                                    <option value="NO">NO</option>
                                </select>
                            </td>
                            <td class="cell-view">
                                <span>10</span>
                                <img src="/imagenes/vista.png" alt="">
                            </td> 
                        </tr>
                        <tr>
                            <td>Investigación</td>
                            <td>Actividad 3</td>
                            <td>4</td>
                            <td>
                                <p class="rev_button">No hay</p>
                            </td>
                            <td>
                                <select class="sel-cumpl" name="search-type">
                                    <option value="SI">SI</option>
                                    <option value="NO" selected>NO</option>
                                </select>
                            </td>
                            <td class="cell-view">
                                <span>10</span>
                                <img src="/imagenes/vista.png" alt="">
                            </td>   
                        </tr>
                        <tr>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="title-cont">
              <p>Estado: Revisado</p>
            </div>
            <div class="salida">
                <a href="">Regresar</a>
                <a href="">Registrar</a>
            </div>
        </section>

    </div>
    <script src="/js/supervision/gestion-evaluaciones.js"></script>
</body>
</html>