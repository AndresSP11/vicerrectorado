<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ##### FUENTES ##### -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="fondo">
        <header>
        <img src="./imagenes/logouni.png" alt="">
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
        
        <div class="contenedor">
            <form action="" class="formulario">
                <h1>Iniciar Sesión</h1>
                <div>
                    <label for="">Usuario </label>
                    <input type="text">
                </div>

                <div>
                    <label for="">Contraseña </label>
                    <input type="password">
                    <button class="boton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        
                        <path class="eye-1" stroke="#0A0A30" stroke-width="1.5"
                        d="M19.195 11.31c.325.41.325.97 0 1.38-1.114 1.4-3.916 4.45-7.195 4.45-3.28 0-6.08-3.05-7.195-4.45a1.097 1.097 0 010-1.38C5.92 9.91 8.721 6.86 12 6.86c3.28 0 6.08 3.05 7.195 4.45z" />
                        <circle class="eye-2" cx="12" cy="12" r="1.972" stroke="#265BFF" stroke-width="1.5" />
                        </svg>
                    </button>
                </div>
                <input type="submit" value="Iniciar Sesión" class="inputSubmit">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </form>
        </div>
    </section>
</body>
</html> 

