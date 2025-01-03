<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Docente</title>
    <link rel="stylesheet" href="/styles/docente/01_menu-docente.css">
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
            <div>
                <div class="button_n">
                    <div class="button-sup_red">Gestión de Plan de Actividades</div>
                    <div class="button-inf_white left_children">
                        <label for="search-type" class="search-text">Período:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="24-1" class="option-detected">24-1</option>
                            <option value="24-2" class="option-detected">24-2</option>
                            <option value="25-1" class="option-detected">25-1</option>
                            <option value="25-2" class="option-detected">25-2</option>
                            <option value="26-1" class="option-detected">26-1</option>
                            <option value="26-2" class="option-detected">26-2</option>
                            <option value="27-1" class="option-detected">27-1</option>
                            <option value="27-2" class="option-detected">27-2</option>
                            <option value="28-1" class="option-detected">28-1</option>
                            <option value="28-2" class="option-detected">28-2</option>
                        </select>
                    </div>
                </div>
                
                <div class="button_n">
                    <a class="button-sup_red" id="reg-act-lec" href="./03_registro-act-no-lec.php">Registro de Actividades No Lectivas</a>
                    <div class="button-inf_white"></div>
                </div>
            </div>

            <div class="salida">
                <a href="./01_menu-docente.php">Regresar</a>
            </div>
        </section>

    <script src="/js/docente/02_gestion-plan-actividades.js"></script>

    </div>
</body>
</html>