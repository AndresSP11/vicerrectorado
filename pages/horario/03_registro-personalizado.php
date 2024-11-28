<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Personalizado</title>
    <link rel="stylesheet" href="/styles/horario/03_registro-personalizado.css">
    <!-- ############################################################ FONTS #################################################################### -->
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
              <p class="academico">Periodo Academico:24-1</p>
              <p>Registro personalizado de horarios</p>   
            </div>

            <div class="search">
                <div class="left">
                    <div class="left_children">
                        <label for="search-type" class="search-text">Período:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Tipo de Busqueda</option>
                            <option value="24-1">24-1</option>
                            <option value="24-2">24-2</option>
                        </select>
                    </div>
                    <div class="left_children">
                        <label for="search-type" class="search-text">Tipo de hora:</label>
                        <select id="seleccion_tipo" name="search-type">
                            <option value="" disabled selected hidden>Seleccionar</option>
                            <option value="Plan-horas">Plan de horas</option>
                            <option value="Evidencias">Evidencias</option>
                        </select>
                    </div>
                    <div class="left_children">
                        <label for="search-type" class="search-text">Justificacion:</label>
                        <input type="text" class="text-just">
                    </div>
                </div>

                <div class="right">
                    <div class="right_children">
                        <label for="search-type" class="search-text">Ingrese el dato:</label>
                        <input type="text">
                    </div>
                    <div class="right_children">
                        <label for="search-type" class="search-text">Ingrese las horas:</label>
                        <input type="text" >
                    </div>
                    <div class="right_children">
                        <button class="boton-aceptar">
                            Aceptar
                        </button>
                    </div>
                </div>
            </div>

            <div class="excel-button">
              <button>Descargar excel</button>   
            </div>  

            <div class="tabla-container">
                <table class="tabla" id="tabla">
                    <thead>
                        <tr>
                            
                            <th>Codigo</th>
                            <th>Docente</th>
                            <th>D.H</th>
                            <th>Horas Lectivas</th>
                            <th>Horas No Lectivas</th>
                            <th>Estado</th>
                           
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>20200210E</td>
                            <td>Ricardo Ulloa Rodriguez</td>
                            <td>TP-05</td>
                            <td>4</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">Confirmado</p>
                            </td>
                        </tr>
                        <!-- Agrega más filas aquí según sea necesario -->
                        <tr>
                            <td>20200210E</td>
                            <td>Ricardo Ulloa Rodriguez</td>
                            <td>TP-05</td>
                            <td>4</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">Confirmado</p>
                            </td>
                        </tr>
                        <tr>
                            <td>20200210E</td>
                            <td>Ricardo Ulloa Rodriguez</td>
                            <td>TP-05</td>
                            <td>4</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">Confirmado</p>
                            </td>
                        </tr>
                        <tr>
                            <td>20200210E</td>
                            <td>Ricardo Ulloa Rodriguez</td>
                            <td>TP-05</td>
                            <td>4</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">Confirmado</p>
                            </td>
                        </tr>
                        <tr>
                            <td>20200210E</td>
                            <td>Ricardo Ulloa Rodriguez</td>
                            <td>TP-05</td>
                            <td>4</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">Confirmado</p>
                            </td>
                        </tr>
                        <tr>
                            <td>20200210E</td>
                            <td>Ricardo Ulloa Rodriguez</td>
                            <td>TP-05</td>
                            <td>4</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">Confirmado</p>
                            </td>
                        </tr>
                        <tr>
                            <td>20200210E</td>
                            <td>Ricardo Ulloa Rodriguez</td>
                            <td>TP-05</td>
                            <td>4</td>
                            <td>0</td>
                            <td>
                                <p class="rev_button">Confirmado</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="salida">
                    <a href="">Regresar</a>
            </div>
        </section>



    </div>
</body>
</html>