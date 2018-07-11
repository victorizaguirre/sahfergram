<!DOCTYPE HTML>
<!--
	Sahfergram by Víctor Izaguirre
	  @VICTORPC
-->
<html>
<head>
    <title>Sahfergram by Sahfer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="landing is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="index.php">Sahfergram</a> by Sahfer </h1>
        <nav id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>

                <li><a href="formulario.php" class="button">Regístrate</a></li>
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">
        <h2>Sahfergram</h2>
        <p>¡La nueva red social que necesitas descubrir!</p>

    </section>

    <!-- Main -->
    <section id="main" class="container">
        <br><br><br><br><br><br><br><br>
        <form class="formulario" method="post" action="data.php">
            <fieldset>
                <legend>Tus Datos</legend>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" placeholder="Tu Nombre" autocomplete="on" required>
                <br><br>
                <label for="apellido">Apellido Paterno </label>
                <input type="text" name="apellidoP" placeholder="Tu Apellido" autocomplete="on" required>
                <br><br>
                <label for="apellido">Apellido Materno </label>
                <input type="text" name="apellidoM" placeholder="Tu Apellido" autocomplete="on" required>
                <br><br>
                <label for="fecha">Fecha de Nacimiento </label>
                <input type="date" name="date"  required>
                <br><br>
                <label for="correo">Correo Electrónico </label>
                <input type="email" name="mail" placeholder="Tu Correo" autocomplete="on" required>
                <br><br>
                <label for="usuario">Usuario </label>
                <input type="text" name="us" placeholder="Tu Usuario" autocomplete="on" required>
                <br><br>
                <label for="contraseña">Contraseña </label>
                <input type="text" name="pass" placeholder="Tu Contraseña" autocomplete="on" required>
                <br><br>


            </fieldset>
            <br><br>

            <br><br>
            <button type="submit" name="Enviar">Enviar</button>

        </form>



    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Sahfergram. Todos los derechos reservados.</li><li>Diseñado por: Víctor Izaguirre</li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>