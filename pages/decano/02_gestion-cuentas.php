<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Cuentas</title>
    <link rel="stylesheet" href="/styles/decano/02_gestion-cuentas.css">
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
            <div class="modal"></div>
            <div class="title-cont">
              <p>Gestion de Cuentas</p>   
            </div>

            <div class="search">
                        <div class="left">
                            <div class="left_children">
                                <label for="search-type" class="search-text">Tipo de búsqueda:</label>
                                <select id="seleccion_tipo" name="search-type">
                                    <option value="" disabled selected hidden>Seleccionar</option>
                                    <option value="fichador">Número de receta</option>
                                    <option value="codigo-alumno">Período académico</option>
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
                        
                        <div class="right">
                            <label for="search-input" class="search-text">Ingrese el dato:</label>
                            <input type="text" id="dato_texto" name="search-input">
                        </div>
            </div>
            <div class="tabla-container">
                <table class="tabla" id="tabla">
                    <thead>
                        <tr>
                            
                            <th>CÓDIGO</th>
                            <th>NOMBRE</th>
                            <th>ROL</th>
                            <th>CONTRATO</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td>Académico</td>
                            <td>Tipo A</td>
                        </tr>
                        <!-- Agrega más filas aquí según sea necesario -->
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td>Académico</td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td>Académico</td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td>Académico</td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td>Académico</td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td>Académico</td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td>Académico</td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td>Académico</td>
                            <td>Tipo A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="salida">
                <a href="./01_menu-decano.php">Regresar</a>
            </div>
        </section>



    </div>
</body>
</html>