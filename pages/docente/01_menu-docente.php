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
            <h1 class="user-welcome">Bienvenido, Jorge Canchano Minaya</h1>
            <div>
                <div class="button_n">
                    <a class="button-sup_red" href="./02_gestion-plan-actividades.php" >Gestión de Propuesta de Actividades</a>
                    <div class="button-inf_white left_children">
                        <label for="search-type" class="search-text">Período:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="24-1">24-1</option>
                            <option value="24-2">24-2</option>
                        </select>
                    </div>
                </div>
                
                <div class="button_n">
                    <a class="button-sup_red" href="./03_registro-actividades.php">Gestión de Actividades Realizadas</a>
                    <div class="button-inf_white"></div>
                </div>
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
</body>
</html>