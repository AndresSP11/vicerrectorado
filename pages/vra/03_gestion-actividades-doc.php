<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Actividad Docente</title>
    <link rel="stylesheet" href="/styles/vra/03_gestion-actividades-doc.css">
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
    
    <!-- Modal -->
    <div id="modal" class="modal hidden">
        <h2>Registrar fecha límite</h2>
        <div class="form">
            <div class="section">
                <label>Fecha límite:</label>
                <input type="date" name="fecha-limite" id="fecha-limite">
            </div>
            <div class="section">
                <label>Fecha aviso:</label>
                <input type="date" name="fecha-aviso" id="fecha-aviso">
            </div>
        </div>
        <div class="buttons">
            <button class="cancelButton" id="cancelButton">Cancelar</button>
            <button class="acceptButton" id="acceptButton">Aceptar</button>
        </div>
    </div>

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
                        <p>Rol: Administrador</p>
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
              <p>Gestion de Actividad Docente</p>   
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
                    <div class="left_children">
                        <label for="search-type" class="search-text">Tipo:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="carga-horaria">Carga horaria</option>
                            <option value="evidencias">Evidencias</option>
                        </select>
                    </div>
                </div>

                <div class="left">
                    <div class="fecha-button">
                        <button id="fechaButton">Revisar fecha limite</button>
                    </div>
                </div>
                
                <div class="left">
                    <div class="left_children">
                        <label for="search-type" class="search-text">Revisados:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="">0</option>
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="left_children">
                        <label for="search-type" class="search-text">Facultad:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="">FIIS</option>
                            <option value="">FIC</option>
                            <option value="">FAUA</option>
                            <option value="">FIQT</option>
                            <option value="">FIM</option>
                            <option value="">FIGMM</option>
                            <option value="">FEC</option>
                            <option value="">FEROP</option>
                            <option value="">FIP</option>
                            <option value="">FC</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="excel-button">
              <button>Descargar excel</button>   
            </div>  

            <div class="tabla-container">
                <table class="tabla" id="tabla">
                    <thead>
                        <tr>
                            
                            <th>DOCENTE</th>
                            <th>HORAS LECTIVAS</th>
                            <th>HORAS NO LECTIVAS</th>
                            <th>%CAMBIOS</th>
                            <th>CORRECTOS</th>
                            <th>INCORRECTOS</th>
                            <th>REVISIONES</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Daniel Llanos Panduro</td>
                            <td>12</td>
                            <td>40</td>
                            <td>10%</td>
                            <td>0</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">0</p>
                            </td>
                        </tr>
                        <!-- Agrega más filas aquí según sea necesario -->
                        <tr>
                            <td>Daniel Llanos Panduro</td>
                            <td>12</td>
                            <td>40</td>
                            <td>10%</td>
                            <td>0</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Daniel Llanos Panduro</td>
                            <td>12</td>
                            <td>40</td>
                            <td>10%</td>
                            <td>0</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Daniel Llanos Panduro</td>
                            <td>12</td>
                            <td>40</td>
                            <td>10%</td>
                            <td>0</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Daniel Llanos Panduro</td>
                            <td>12</td>
                            <td>40</td>
                            <td>10%</td>
                            <td>0</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Daniel Llanos Panduro</td>
                            <td>12</td>
                            <td>40</td>
                            <td>10%</td>
                            <td>0</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Daniel Llanos Panduro</td>
                            <td>12</td>
                            <td>40</td>
                            <td>10%</td>
                            <td>0</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">0</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="salida">
                    <a href="./01_menu-vra.php">Regresar</a>
            </div>
        </section>

    </div>
    <script src="/js/vra/gestion-actividades-doc.js"></script>
</body>
</html> 