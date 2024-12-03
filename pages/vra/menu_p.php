<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu VRA</title>
    <link rel="stylesheet" href="/styles/vra/01_menu-vra.css">
    <link rel="stylesheet" href="/components/cabecera/cabecera-template.css"> <!-- componente cabecera -->
    <link rel="stylesheet" href="/components/boton-funcion/boton-funcion-template.css"> <!-- componente boton-funcion -->
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
            <h1 class="user-welcome" id="user-welcome"></h1>
            <div>
                <!-- componentes botones -->
                <div id="buttons-container"></div>
            </div>

            <div class="buttons-doc">
                <div class="manual">
                    <button>Descargar Manual de Usuario</button>
                </div>
                <div class="salida">
                    <a href="">Salir</a>
                </div>
            </div>
        </section>
    </div>
    <!-- Script que llama al componente cabecera -->
    <script type="module">
        import { agregarCabecera } from '/components/cabecera/cabecera-template.js';
        import { agregarBoton } from '/components/boton-funcion/boton-funcion-template.js';
        import { actualizarBienvenida } from '/js/vra/01_menu-vra.js';

        // Llamar a la función para agregar el componente con valores personalizados
        agregarCabecera('header', 'Administrador', 'Tino Reyna Villaverde');

        // Llamar a la función para actualizar el nombre de la bienvenida
        actualizarBienvenida('Tino Reyna Villaverde');

        // Llamar a la función para agregar botones con textos personalizados
        agregarBoton('buttons-container', 'Gestión de Cuentas');
        agregarBoton('buttons-container', 'Gestión de Actividades del Docente');
    </script>
</body>
</html>