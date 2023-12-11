<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos.css">

<header class="cabecera">
    <img src="imagenes/logo.png" alt="">
    <h1>Altas de Articulos</h1>
    <h3>Aqui puedes dar de alta a tus Articulos :D</h3>
</header>
<nav class="menu">
<ul>
    <li><a href="../Index.php">INICIO</a></li>
    <li><a href="Bajas_Articulo.php">BAJAS</a></li>
    <li><a href="Actualizar_Articulo.php">ACTUALIZACION</a></li>
    <li><a href="libros.html">DATABASE</a></li>
    <li><a href="contactos.html">CONTACTOS</a></li>
</ul>
</nav>
<hr>
<title>Altas De Articulo</title>
</head>
<body> <center>
   	
<section class="cuerpo">
	
	<article class="iconos">
		<h3>SERVICIOS</h3>
		<div>
			<img src="img/icono-1.png" alt="">		
			<p>Altas de Articulos</p>
		</div>
		<div>
			<img src="img/icono-2.png" alt="">		
			<p>Baja de Articulos</p>
		</div>
		<div>
			<img src="img/icono-3.png" alt="">		
			<p>Base de Datos</p>
		</div>
		<div>
			<img src="img/icono-4.png" alt="">		
			<p>Actualizacion de Datos</p>
		</div>
		
	</article>
	
    <article class="bienvenida">
		<p>En esta seccion, puedes dar de alta tus articulos donados, los cuales se podran refeljar en la bse de datos
            y llevar un registro de los mismos
        </p>
        <p>Gracias por tu donacion!
        </p>
	</article>
	
</head>
<body> <center>
<p>
</p>
    <form method="post" action="Altas_Articulo.php">
<p>
</p>

<p>
</p>
<p>
</p>

     <input type="text" name="NOMBRE_ART" class="texto-articulo" placeholder="Nombre del artículo">
        <input type="text" name="NUMERO_DON" class="texto-donante" placeholder="Número del donante">

        <!--
        <label for="NOMBRE_ART"> nombre del articulo que se va a donar:</label>
        <input type="text" name="NOMBRE_ART" required><br><br>

        <label for="NUMERO_DON"> Numero de el donante:</label>
        <input type="text" name="NUMERO_DON" required><br><br>

        <input type="submit" value="Guardar">

-->

<p>

</p>
<center>
        <input type="submit" value="Guardar">
    </center>
<p>

<a href="../ReporteArticulo.php">
    <img src="img/imp.png" alt="Impresora">
</a><br>


</p>
<footer class="piedepagina">
        <p>WichoDB Team (c) 2023 - Alta de Articulos</p>
    </footer>
        
        
  



    </form>

    

</body>
</html>


<?php
include 'Conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $NOMBRE_ART = $_POST["NOMBRE_ART"];
    $NUMERO_DON = $_POST["NUMERO_DON"];



    // Prepara la consulta SQL de inserción
    $sql = "INSERT INTO ARTICULO (NOMBRE_ART, NUMERO_DON) VALUES (:NOMBRE_ART, :NUMERO_DON)";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion,":NOMBRE_ART",$NOMBRE_ART);
    oci_bind_by_name($insercion,":NUMERO_DON",$NUMERO_DON);

    //Ejecucion de la consulta
    $resultado = oci_execute($insercion);

    //verificaion de una correcta incersion
    if ($resultado) {
        echo "Donante a sido insertado correctamente";
    } else {
        echo "Error al insertar al donante: " . oci_error($conexion);
    }
    oci_free_statement($insercion);
    oci_close($conexion);

}

?>


<?php
include 'Conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $NOMBRE_ART = $_POST["NOMBRE_ART"];
    $NUMERO_DON = $_POST["NUMERO_DON"];



    // Prepara la consulta SQL de inserción
    $sql = "INSERT INTO ARTICULO (NOMBRE_ART, NUMERO_DON) VALUES (:NOMBRE_ART, :NUMERO_DON)";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion,":NOMBRE_ART",$NOMBRE_ART);
    oci_bind_by_name($insercion,":NUMERO_DON",$NUMERO_DON);

    //Ejecucion de la consulta
    $resultado = oci_execute($insercion);

    //verificaion de una correcta incersion
    if ($resultado) {
        echo "Donante a sido insertado correctamente";
    } else {
        echo "Error al insertar al donante: " . oci_error($conexion);
    }
    oci_free_statement($insercion);
    oci_close($conexion);

}

?>