<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Cuentas</title>
    <link rel="stylesheet" href="/styles/vra/02_gestion-cuentas.css">
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

    <!-- Modal Usuario-->
    <div id="modal_usuario" class="modal hidden">
        <h2>Editar Usuario</h2>
        <div class="form">
            <div class="section">
                <div class="sub-section">
                    <label>Código:</label>
                    <span>20202107E</span>
                </div>
                <div class="sub-section">
                    <label>Condición:</label>
                    <select id="seleccion_bloque">
                        <option value="" disabled selected hidden>Seleccionar</option>
                        <option value="">Contratado</option>
                        <option value="">Nombrado</option>
                    </select>
                </div>
                <div class="sub-section">
                    <label>Rol:</label>
                    <select id="seleccion_bloque">
                        <option value="" disabled selected hidden>Seleccionar</option>
                        <option value="">Decano</option>
                        <option value="">Docente</option>
                    </select>
                </div>
            </div>
            <div class="section">
                <div class="sub-section">
                    <label>Nombre:</label>
                    <span>James Torres</span>
                </div>
                <div class="sub-section">
                    <label>Contrato:</label>
                    <select id="seleccion_bloque">
                        <option value="" disabled selected hidden>Seleccionar</option>
                        <option value="">Tipo A</option>
                        <option value="">Tipo B</option>
                    </select>
                </div>
                <div class="sub-section list">
                    <span class="title">Roles asignados</span>
                    <div class="cell">
                        <span>Decano</span>
                        <img src="/imagenes/Delete.png" alt="">
                    </div>
                    <div class="cell">
                        <span>Docente</span>
                        <img src="/imagenes/Delete.png" alt="">
                    </div>
                    
                    
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
              <p>Gestion de Cuentas</p>   
            </div>

            <div class="search">
                <div class="left">
                    <div class="left_children">
                        <label for="search-type" class="search-text">Tipo de búsqueda:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="codigo">Código</option>
                            <option value="nombre">Nombre</option>
                        </select>
                    </div>
                    <!-- <div class="left_children">
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
                    </div> -->
                </div>
                
                <div class="left">
                    <div class="right_children">
                        <label for="search-input" class="search-text">Ingrese el dato:</label>
                        <input type="text" id="dato_texto" name="search-input">
                    </div>
                </div>
            </div>

            <div class="tabla-container" id="tabla-container">
                <!-- Aqui vamos agregar la tabla -->
                <table class="tabla" id="tabla">
                    
                </table>
            </div>
            <div class="salida">
                <a href="./01_menu-vra.php">Regresar</a>
            </div>
        </section>
    </div>

    <script src="../../js/vra/decanos-show.js"></script>
    <script src="/js/vra/02_gestion-cuentas.js"></script>
    
</body>
</html>