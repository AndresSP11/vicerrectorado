<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu VRA</title>
    <link rel="stylesheet" href="/styles/vra/01_menu-vra.css">
    <link rel="stylesheet" href="/components/header/header-template.css"> <!-- componente header -->
    <link rel="stylesheet" href="/components/button-menu/button-menu-template.css"> <!-- componente button-menu -->
    <link rel="stylesheet" href="/components/button-lower/button-lower-template.css"> <!-- componente button-lower -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class='container-cuerpo'>

        <!-- componente cabecera -->
        <div id="header"></div> 

        <section class="container">
            <h1 class="user-welcome" id="user_welcome"></h1>

            <!-- componentes botones -->
            <div id="buttons_menu"></div>

            <!-- Contenedor donde se insertará el componente -->
            <div id="buttons_lower"></div>

        </section>
    </div>
    <!-- Script que llama a los componentes -->
    <script type="module">
        import { agregarCabecera } from '/components/header/header-template.js';
        import { agregarBotonMenu } from '/components/button-menu/button-menu-template.js';
        import { agregarBotonInferior } from '/components/button-lower/button-lower-template.js';
        import { actualizarBienvenida } from '/js/vra/01_menu-vra.js';

        // Llamar a la función para agregar el componente con valores personalizados
        agregarCabecera('header', 'Administrador', 'Tino Reyna Villaverde');

        // Llamar a la función para actualizar el nombre de la bienvenida
        actualizarBienvenida('Tino Reyna Villaverde');

        // Llamar a la función para agregar botones con textos personalizados
        agregarBotonMenu('buttons_menu', 'Gestión de Cuentas');
        agregarBotonMenu('buttons_menu', 'Gestión de Actividades del Docente');

        // Configuración para los botones inferiores
        const buttonConfig = [
            { modal: false, type: 'manual'},
            { modal: false, type: ''},
            { modal: false, type: ''},
            { modal: false, type: 'exit'}
        ];
        
        /* const buttonConfig = [
            { visible: true, label: 'Manual de Usuario', action: () => alert('Descargando manual...') },
            { visible: false, label: 'Nombre Boton', action: () => alert('Funcion...') },
            { visible: false, label: 'Nombre Boton', action: () => alert('Funcion...') },
            { visible: true, label: 'Salir', action: () => alert('Saliendo...') }
        ]; */

        // Cargar el componente con la configuración
        agregarBotonInferior('buttons_lower', buttonConfig);
    </script>
</body>
</html>