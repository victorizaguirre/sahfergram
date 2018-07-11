<?php
/**
 * Created by PhpStorm.
 * User: VICTOR
 * Date: 10/07/2018
 * Time: 06:40 PM
 */
if (isset($_POST['Enviar'])){
    $nombre = utf8_decode($_POST['nombre']);
    $ap = utf8_decode($_POST['apellidoP']);
    $am = utf8_decode($_POST['apellidoM']);

    $fn = $_POST['date'];
    $correo = $_POST['mail'];
    $us = $_POST['us'];
    $pass = $_POST['pass'];
}
?>
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
        <fieldset>
            <legend>EXITO! Datos Registrados</legend>
            <br>

            <?php echo $nombre;?>
            <br><br>
            <?php echo $ap; ?>
            <br><br>
            <?php echo $am; ?>
            <br><br>
            <?php echo $fn; ?>
            <br><br>
            <?php echo $correo; ?>
            <br><br>
            <?php echo $us; ?>
            <br><br>
            <?php echo $pass; ?>
        </fieldset>
    
    

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
