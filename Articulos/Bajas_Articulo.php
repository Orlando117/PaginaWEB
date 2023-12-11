<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos.css">

<header class="cabecera">
    <h1>Bajas de Articulos</h1>
    <h3>Aqui puedes dar de Baja a tus Articulos :D</h3>
</header>
<nav class="menu">
<ul>
    <li><a href="../Index.php">INICIO</a></li>
    <li><a href="Altas_Articulo.php">ALTAS</a></li>
    <li><a href="Actualizar_Articulo.php">ACTUALIZACION</a></li>
    <li><a href="libros.html">DATABASE</a></li>
    <li><a href="contactos.html">CONTACTOS</a></li>
</ul>
</nav>
<hr>
<title>Bajas De Articulos</title>
</head>
<body> <center>
   	
    <title>Bajas de un Articulo</title>
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
		<p>En esta seccion, puedes dar de baja tus articulos donados, los cuales se podran refeljar en la base de datos
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


    <form method="post" action="Bajas_Articulo.php">


        <input type="text" name="FOLIO_ART" class="texto-articulo" placeholder="Id del artículo">
   
<!--
        <label for="FOLIO_ART"> nombre del articulo que se va a eliminar:</label>
        <input type="text" name="FOLIO_ART" required><br><br>
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
        <p>WichoDB Team (c) 2023 - Baja de Articulos</p>
    </footer>
    </form>
</body>
</html>





<?php
include 'Conexion.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $FOLIO_ART = $_POST["FOLIO_ART"];

    // Prepara la consulta SQL de inserción
    $sql = "DELETE FROM ARTICULO WHERE FOLIO_ART = :FOLIO_ART";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion,":FOLIO_ART",$FOLIO_ART);

    //Ejecucion de la consulta
    $resultado = oci_execute($insercion);

    //verificaion de una correcta incersion
    if ($resultado) {
        echo "Articulo a sido eliminado de forma correcta";
    } else {
        echo "Error al eliminar el articulo, revisa el numero ingresado " . oci_error($conexion);
    }
     var_dump($_POST); // Verifica si las variables POST se reciben correctamente 

    oci_free_statement($insercion);
    oci_close($conexion);

}
?>





<?php
include 'Conexion.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $FOLIO_ART = $_POST["FOLIO_ART"];

    // Prepara la consulta SQL de inserción
    $sql = "DELETE FROM ARTICULO WHERE FOLIO_ART = :FOLIO_ART";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion,":FOLIO_ART",$FOLIO_ART);

    //Ejecucion de la consulta
    $resultado = oci_execute($insercion);

    //verificaion de una correcta incersion
    if ($resultado) {
        echo "Articulo a sido eliminado de forma correcta";
    } else {
        echo "Error al eliminar el articulo, revisa el numero ingresado " . oci_error($conexion);
    }
     var_dump($_POST); // Verifica si las variables POST se reciben correctamente 

    oci_free_statement($insercion);
    oci_close($conexion);

}
?>