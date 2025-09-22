<?php

//base de datos
require 'includes/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['e_mail'];
    $mensaje = $_POST['mensaje'];


    //insertar en la BD
    $query = "INSERT INTO contacto (nombre, telefono, e_mail, mensaje) 
    VALUES ('$nombre','$telefono','$email','$mensaje');";
    
    $resultado = mysqli_query($db, $query);

    if (!$resultado) {
        echo "No se insertó el contacto correctamente";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:ital,wght@0,400;0,700;1,200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="css/styless.css">
</head>


<body>
    <header>
        <h1 class="titulo">Julio Pat <span>Freelancer</span></h1>
    </header>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">

            <a href="#">Inicio</a>
            <a href="#">Sobre Mi</a>
            <a href="#">Clientes</a>
            <a href="#">Contacto</a>
        </nav>
    </div>



    <section class="hero">
        <div class="contenido-hero">
            <h2 class="titulo">Diseño y Desarrollo web <span>Freelancer</span></h2>
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="100"
                    height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffec00" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <p>Felipe Carrillo Puerto, QuintanaRoo</p>
            </div>
            <a href="#" class="boton">Contactar</a>
        </div>

    </section>



    <main class="contenedor sombra">
        <h2>Mis Servicios</h2>

        <div class="servicios">



            <section class="servicio">
                <h3>Diseño web</h3>
                <div class="iconos"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette"
                        width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    </svg></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic qui error sunt dicta molestias in.</p>
            </section>


            <section class="servicio">
                <h3>Aplicaciones web</h3>
                <div class="iconos"><svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-brand-android" width="40" height="40" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 10l0 6" />
                        <path d="M20 10l0 6" />
                        <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
                        <path d="M8 3l1 2" />
                        <path d="M16 3l-1 2" />
                        <path d="M9 18l0 3" />
                        <path d="M15 18l0 3" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M8.286 7.008c-3.216 0 -4.286 3.23 -4.286 5.92c0 3.229 2.143 8.072 4.286 8.072c1.165 -.05 1.799 -.538 3.214 -.538c1.406 0 1.607 .538 3.214 .538s4.286 -3.229 4.286 -5.381c-.03 -.011 -2.649 -.434 -2.679 -3.23c-.02 -2.335 2.589 -3.179 2.679 -3.228c-1.096 -1.606 -3.162 -2.113 -3.75 -2.153c-1.535 -.12 -3.032 1.077 -3.75 1.077c-.729 0 -2.036 -1.077 -3.214 -1.077z" />
                        <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic qui error sunt dicta molestias in.</p>
            </section>

            <section class="servicio">
                <h3>E-comerce</h3>
                <div class="iconos"><svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-shopping-bag" width="40" height="40" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                        <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                    </svg></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic qui error sunt dicta molestias in.</p>

            </section>


        </div>


        <h2>Contacto</h2>




        <form class="formulario" method="POST" action="index.php">
            <fieldset>
                <legend>Contactanos llenando todos los campos</legend>

                <div class="contenedor-campos">
                    
                    <div class="campo">
                        <label for="">Nombre</label>
                        <input type="text" placeholder="Tu nombre" name="nombre" class="input-text">

                    </div>

                    <div class="campo">
                        <label for="">Telefono</label>
                        <input type="tel" placeholder="Tu Telefono" name="telefono" class="input-text">
                    </div>

                    <div class="campo">
                        <label for="">Email</label>
                        <input type="email" placeholder="Tu email" name="e_mail" class="input-text">
                    </div>

                    <div class="campo">
                        <label for="">Mensaje</label>
                        <textarea name="mensaje" id=""  class="input-text"></textarea>
                    </div>

                </div>

                <div class="alinear-derecha flex">
                    <input class="boton w-sm-100" type="submit" value="Enviar">
                </div>




            </fieldset>


        </form>
    </main>



    <footer>
        <p>Todos los derechos reservados. Julio Pat Freelancer@</p>
    </footer>



</body>

</html>