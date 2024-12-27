<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Actividades</title>
    <link rel="stylesheet" href="/styles/docente/03_registro-actividades.css">
    <!-- ############################################################ FONTS #################################################################### -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

    <!-- Fondo oscuro -->
    <div id="overlay" class="overlay hidden"></div>

    <!-- Modal imagen-->
    <div id="modal_imagen" class="modal hidden">
        <h2>Cargar evidencia</h2>
        <div class="zona_carga">
            <img src="/imagenes/subirImagen.png" alt="">
        </div>
        <div class="close_buttons">
            <button class="cancelButton">Cancelar</button>
            <button class="acceptButton">Aceptar</button>
        </div>
    </div>

    <!-- Modal actividad-->
    <div id="modal_actividad" class="modal hidden">
        <h2>Registrar de Actividad</h2>
        <div class="form">
            <div class="section">
                <div class="sub-section">
                    <label>Actividad:</label>
                    <input type="text" name="actividad" id="actividad">
                </div>
                <div class="sub-section">
                    <label>Bloque:</label>
                    <select id="seleccion_bloque">
                        <option value="" disabled selected hidden>Seleccionar</option>
                        <option value="">Tutoría</option>
                        <option value="">Investigación</option>
                    </select>
                </div>
            </div>
            <div class="section">
                <div class="sub-section">
                    <label>Horas:</label>
                    <input type="date" name="horas" id="horas">
                </div>
                <div class="sub-section">
                    <label>Evidencia:</label>
                    <span>Subido</span>
                </div>
            </div>
        </div>
        <div class="close_buttons">
            <button class="cancelButton">Cancelar</button>
            <button class="acceptButton">Aceptar</button>
        </div>
    </div>

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
                        <label for="search-type" class="state-text">40 horas</label>
                    </div>
                    <div class="left_children">
                        <label for="search-type" class="search-text">Total de horas</label>
                        <label for="search-type" class="state-text">44 horas</label>
                    </div>
                </div>
                
                <div class="left">
                    <div class="right_children">
                        <label for="search-type" class="search-text">Fecha límite</label>
                        <label for="search-type" class="state-text">24/12/2024</label>
                    </div>
                    <div class="right_children">
                        <label for="search-type" class="search-text">Estado</label>
                        <label for="search-type" class="state-text">No cumplido</label>
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
                            <th>ESTADO</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tutoría</td>
                            <td>Actividad 1</td>
                            <td>6</td>
                            <td>
                                <p class="evi_button blue_button">Subir</p>
                            </td>
                            <td>
                                <p class="rev_button">No revisado</p>
                            </td>
                        </tr>
                        <!-- Agrega más filas aquí según sea necesario -->
                        <tr>
                            <td>Asesoría de tesis</td>
                            <td>Actividad 2</td>
                            <td>6</td>
                            <td>
                                <p class="evi_button green_button">Subido</p>
                            </td>
                            <td>
                                <p class="rev_button">No revisado</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Investigación</td>
                            <td>Actividad 3</td>
                            <td>6</td>
                            <td>
                                <p class="evi_button green_button">Subido</p>
                            </td>
                            <td>
                                <p class="rev_button">Revisado</p>
                            </td> 
                        </tr>
                        <tr>
                            <td> </td>
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
                        </tr>
                        <tr>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="salida">
                <a href="./01_menu-docente.php">Regresar</a>
                <button href="" id="agregarButton">Agregar</button>
            </div>
        </section>

    </div>
    <script src="/js/docente/03_registro-actividades.js"></script>
</body>
</html>