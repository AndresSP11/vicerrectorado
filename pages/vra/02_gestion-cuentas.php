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
    <link rel="stylesheet" href="/components/input-text/input-text-template.css"> <!-- componente input-text -->
    <link rel="stylesheet" href="/components/input-select/input-select-template.css"> <!-- componente input-select -->
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

            <div class="filter-top"></div>

            <!-- <div class="search">
                <div class="left">
                    <div class="left_children">
                        <label for="search-type" class="search-text">Tipo de búsqueda:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="codigo">Código</option>
                            <option value="nombre">Nombre</option>
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
                
                <div class="left">
                    <div class="right_children">
                        <label for="search-input" class="search-text">Ingrese el dato:</label>
                        <input type="text" id="dato_texto" name="search-input">
                    </div>
                </div>
            </div> -->  

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
        import { agregarInputText } from '/components/input-text/input-text-template.js';
        import { agregarInputSelect } from '/components/input-select/input-select-template.js';
        import { agregarFilterTop } from '/components/filter-top/filter-top-template.js';
        import { FilterTop } from '/components/filter-top/filter-top-template.js';

        /* const optionsSearch = [
            { text: "Opción 1", value: "1" },
            { text: "Opción 2", value: "2" },
            { text: "Opción 3", value: "3" },
            { text: "Opción 4", value: "4" }
            ];

        const optionsFacultad = [
            { text: "Opción 1", value: "1" },
            { text: "Opción 2", value: "2" },
            { text: "Opción 3", value: "3" },
            { text: "Opción 4", value: "4" }
            ]; */

        // Llamar a la función para agregar el componente header
        agregarCabecera('header', 'Administrador', 'Tino Reyna Villaverde');

        const elementConfig = [
            { element: 'select', type: 'manual'},
            { element: 'select', type: ''},
            { element: '', type: ''},
            { element: 'input', type: 'text'},
            { element: '', type: ''},
            { element: '', type: ''}
        ];

        // Llamar a la función para agregar el componente filter-top
        agregarFilterTop('filter-top', elementConfig);

        // Inicializar el componente filter-top
        const filterTop = new FilterTop('filter-top-template');

        // Crear pares de elementos y añadirlos a las columnas
        const pair1 = filterTop.createPair({ type: 'input', labelText: 'Nombre:', inputType: 'text', id: 'name-pair' });
        const pair2 = filterTop.createPair({ type: 'input', labelText: 'Fecha:', inputType: 'date', id: 'date-pair' });
        const pair3 = filterTop.createPair({ type: 'select', labelText: 'Opciones:', options: ['A', 'B', 'C'], id: 'select-pair' });
        const pair4 = filterTop.createPair({ type: 'span', labelText: 'Texto:', id: 'span-pair' });
        const pair5 = filterTop.createPair({ type: 'button', labelText: 'Enviar', id: 'button-pair' });

        // Añadir los pares a las columnas
        filterTop.addPairToColumn(pair1, 1);
        filterTop.addPairToColumn(pair2, 1);
        filterTop.addPairToColumn(pair3, 2);
        filterTop.addPairToColumn(pair4, 2);
        filterTop.addPairToColumn(pair5, 1);

        // Llamar a la función para agregar el componente input-text
        /* agregarInputText('input-text', 'datoLab', 'Ingresar dato:'); */
        
        // Llamar a la función para agregar el componente input-select
        /* agregarInputSelect('input-select', 'searchLab', 'Tipo de búsqueda', 'searchSel', optionsSearch);
        agregarInputSelect('input-select', 'facuLab', 'Facultad', 'facuSel', optionsFacultad); */
    </script>
</body>
</html>