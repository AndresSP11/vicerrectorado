<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu VRA</title>
    <link rel="stylesheet" href="/styles/rol/01_menu-rol.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class='container-cuerpo'>
        <header>
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
        </div>
        </header>

        <section class="container">
            <h1 class="user-welcome">Bienvenido, Tino Reyna Villaverde</h1>
            <div>
                <div class="button_n">
                    <div class="button-sup_red">Seleccione un rol</div>
                    <div class="left_children">
                        <label for="search-type" class="search-text">Rol:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="vra">VRA</option>
                            <option value="decano">Decano</option>
                            <option value="departamento">Dep Académico</option>
                            <option value="supervision">Supervision</option>
                            <option value="horario">Horario</option>
                            <option value="docente">Docente</option>
                        </select>
                    </div>
                </div>
                
            </div>

            <div class="buttons-doc">
                <div class="salida">
                    <a href="">Salir</a>
                    <a href="" id="continuar">Continuar</a>
                </div>
            </div>

        </section>
    </div>
</body>

</html>

<script>
    import { actualizarHref } from '/js/rol/01_menu-rol.js';

    actualizarHref('seleccion_tipo', 'continuar', {
        vra: '/pages/vra/01_menu-vra.php',
        decano: '/pages/decano/01_menu-decano.php',
        departamento: '/pages/departamento-academico/01_menu-departamento.php',
        supervision: '/pages/supervision/01_menu-supervision.php',
        horario: '/pages/horario/01_menu-horario.php',
        docente: '/pages/docente/01_menu-docente.php',
    });
</script>
