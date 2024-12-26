<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Cuentas</title>
    <link rel="stylesheet" href="/styles/vra/02_gestion-cuentas.css">
    <link rel="stylesheet" href="/components/header/header-template.css"> <!-- componente header -->
    <link rel="stylesheet" href="/components/control-input/control-input-template.css"> <!-- componente input-text -->
    <link rel="stylesheet" href="/components/control-select/control-select-template.css"> <!-- componente input-select -->
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

        <!-- componente cabecera -->
        <div id="header"></div>

        <section class="container">
            <div class="title-cont">
                <p>Gestion de Cuentas</p>
            </div>

            <div id="control_group" class="control-group">
                <div class="column" id="c1">
                    <div class="row" id="r11"></div>
                    <div class="row" id="r12"></div>
                    <div class="row" id="r13"></div>
                </div>
                <div class="column" id="c2">
                    <div class="row right" id="r21"></div>
                    <div class="row right" id="r22"></div>
                    <div class="row right" id="r23"></div>
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
                            <td class="cell-rol">
                                <span>Académico</span>
                                <img class="edit-button" src="/imagenes/change_rol.png" alt="">
                            </td>
                            <td>Tipo A</td>
                        </tr>
                        <!-- Agrega más filas aquí según sea necesario -->
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td class="cell-rol">
                                <span>Académico</span>
                                <img class="edit-button" src="/imagenes/change_rol.png" alt="">
                            </td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td class="cell-rol">
                                <span>Académico</span>
                                <img class="edit-button" src="/imagenes/change_rol.png" alt="">
                            </td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td class="cell-rol">
                                <span>Académico</span>
                                <img class="edit-button" src="/imagenes/change_rol.png" alt="">
                            </td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td class="cell-rol">
                                <span>Académico</span>
                                <img class="edit-button" src="/imagenes/change_rol.png" alt="">
                            </td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td class="cell-rol">
                                <span>Académico</span>
                                <img class="edit-button" src="/imagenes/change_rol.png" alt="">
                            </td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td class="cell-rol">
                                <span>Académico</span>
                                <img class="edit-button" src="/imagenes/change_rol.png" alt="">
                            </td>
                            <td>Tipo A</td>
                        </tr>
                        <tr>
                            <td>2022107E</td>
                            <td>James Torres</td>
                            <td class="cell-rol">
                                <span>Académico</span>
                                <img class="edit-button" src="/imagenes/change_rol.png" alt="">
                            </td>
                            <td>Tipo A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="salida">
                <a href="">Regresar</a>
            </div>
        </section>
    </div>

    <script src="/js/vra/02_gestion-cuentas.js"></script>
    <!-- Script que llama a los componentes -->
    <script type="module">
        import { agregarCabecera } from '/components/header/header-template.js';
        import { agregarControlInput } from '/components/control-input/control-input-template.js';
        import { agregarControlSelect } from '/components/control-select/control-select-template.js';

        // Llamar a la función para agregar el componente header
        agregarCabecera('header', 'Administrador', 'Tino Reyna Villaverde');

        const optionsSearch = [
            { text: "Código", value: "código" },
            { text: "Nombre", value: "nombre" },
            ];

        const optionsFacultad = [
            { text: "FIIS", value: "FIIS" },
            { text: "FIC", value: "FIC" },
            { text: "FAUA", value: "FAUA" },
            { text: "FIQT", value: "FIQT" },
            { text: "FIM", value: "FIM" },
            { text: "FIGMM", value: "FIGMM" },
            { text: "FEC", value: "FEC" },
            { text: "FEROP", value: "FEROP" },
            { text: "FIP", value: "FIP" },
            { text: "FC", value: "FC" }
            ];
        
        // Llamar a la función para agregar el componente input-select
        agregarControlSelect('r11', 'searchLab', 'Tipo de búsqueda', 'searchSel', optionsSearch);
        agregarControlSelect('r12', 'facuLab', 'Facultad', 'facuSel', optionsFacultad);

        // Llamar a la función para agregar el componente input-text
        agregarControlInput('r21', 'datoLab', 'Ingresar dato', 'datoText', 'text');
    </script>
</body>
</html>