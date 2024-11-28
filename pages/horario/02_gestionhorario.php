<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu VRA</title>

    <!-- Hoja de Estilos Relacionados -->
    <link rel="stylesheet" href="../../styles/horario/02_gestionhorario.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
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
                        <p>Rol: OERA</p>
                        <p>Ronny Hancco Lopez</p>
                    </div>
                    <div>
                        <i class='bx bxs-user log-user'></i> 
                    </div>
                </div>
            </div> 
        </header>

        <section class="container">
            <h1 class="user-welcome">Bienvenido, Ronny Hancco Lopez</h1>
            <div>
                <div class="button_n">
                    <div class="button-sup_red">Gestión de Horarios</div>
                </div>
                <form action="">
                    <div>
                        <label for="" class="label-select">Periodo</label>
                        <select name="" id="" class="select-option">
                            <option value="">24-1</option>
                            <option value="">24-2</option>
                            <option value="">25-1</option>
                            <option value="">25-2</option>
                            <option value="">26-1</option>
                            <option value="">26-2</option>
                        </select>
                    </div>
                    <input type="submit" class="submit-var" value="Registro personalizado de horario">
                </form>
                
            </div>

            <div class="buttons-doc">
                
                <div class="salida">
                    <a href="">Salir</a>
                </div>
            </div>

        </section>

    </div>
</body>
</html>