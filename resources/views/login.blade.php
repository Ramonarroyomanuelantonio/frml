<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <html>
    <!-- Contenedor principal de la página -->
    <div class="wrapper">

        <!-- Contenedor principal del contenido -->
        <div class="container main">

            <!-- Fila para organizar el contenido -->
            <div class="row">

                <!-- Columna izquierda para la imagen y el mensaje -->
                <div class="col-md-6 side-image">

                    <!-- Imagen -->
                    <img class="imalogin" src="img/loginimg.png" alt="IMAGEN LOGIN">

                    <!-- Mensaje de bienvenida -->
                    <div class="text">
                        <p>Bienvenido, por favor inserte sus credenciaels</p>
                    </div>

                </div>

                <!-- Columna derecha para el formulario de registro -->
                <div class="col-md-6 right">

                    <!-- Formulario de registro -->
                    <div class="input-box">

                        <!-- Encabezado del formulario -->
                        <div class="cabeza">
                            <header>Bienvenido de nuevo</header>
                            <h3 class="bajo">Ingrese sus credenciales por favor</h3>
                            <br>
                        </div>

                        <!-- Campo de entrada para el correo electrónico -->
                        <div class="input-field">
                            <input type="text" class="input" id="email" required="" autocomplete="off">
                            <label for="email">Correo</label>
                        </div>

                        <!-- Campo de entrada para la contraseña -->
                        <div class="input-field">
                            <input type="password" class="input" id="pass" required="">
                            <label for="pass">Contraseña</label>
                        </div>
<br>
                        <!-- Checkbox "Recordar contraseña" -->
                            <label class="recordar" for="remember">
                                <input type="checkbox" id="remember" name="remember">
                                Recordar contraseña
                            </label>

                        <!-- Enlace "Olvidé mi contraseña" -->
                        <a class="olcon" href="olcon">Olvidé mi contraseña</a>
                        <!-- Botón de envío del formulario -->
                        <div class="input-field">
                            <input type="submit" class="submit" value="Iniciar sesión">
                        </div>
                        <br>
                        <!-- Contenedor vacío para otros elementos (posiblemente se agregará contenido aquí más adelante) -->
                        <div class="signin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
