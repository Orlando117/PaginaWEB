<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Img/Estilos12.css">

<header class="cabecera">
    <h1>Bajas de Categorias</h1>
    <h3>Aqui puedes dar de baja a tus Categorias :D</h3>
</header>
<nav class="menu">
<ul>
    <li><a href="../Index.php">INICIO</a></li>
    <li><a href="Altas_categoria.php">ALTAS</a></li>
    <li><a href="Actualizar_categoria.php">ACTUALIZACION</a></li>

    <li><a href="libros.html">DATABASE</a></li>
    <li><a href="contactos.html">CONTACTOS</a></li>
</ul>
</nav>
<hr>
<title>Bajas De Categorias</title>
</head>
<body> <center>
   	
<section class="cuerpo">
	
	<article class="iconos">
		<h3>SERVICIOS</h3>
		<div>
			<img src="img/icono-1.png" alt="">		
			<p>Altas de Categorias</p>
		</div>
		<div>
			<img src="img/icono-2.png" alt="">		
			<p>Baja de Categorias</p>
		</div>
		<div>
			<img src="img/icono-3.png" alt="">		
			<p>Actualizar Categorias</p>
		</div>
		<div>
			<img src="img/icono-4.png" alt="">		
			<p>Visualizacion de Datos</p>
		</div>
		
	</article>
	
    <article class="bienvenida">
		<p>En esta seccion, puedes dar de baja las categorias, para una mejor comprension del sistema implementado 
        </p>
        <p>Lamentamos el error!
        </p>
	</article>
	
</head>
<body> <center>
    <p>
        Ingresa por favor tu folio 
</p>
<p>
    |
    |
    |
</p>
    <form method="post" action="Bajas_categoria.php">


    <input type="text" name="FOLIO_ART" class="texto-articulo" placeholder="Baja de Folio Art">

    <!--
        <label for="FOLIO_ART"> folio del articulo para categorisar:</label>
        <input type="number" name="FOLIO_ART" required><br><br>


        <input type="submit" value="Guardar">
-->

        <p>

</p>
<center>
        <input type="submit" value="Guardar">
    </center>
<p>


<a href="../ReporteCategoria.php">
    <img src="img/imp.png" alt="Impresora">
</a><br>



</p>
<footer class="piedepagina">
        <p>WichoDB Team (c) 2023 - Bajas de Categorias</p>
    </footer>
        
        
  



    </form>

</body>
</html>


<?php
include 'Conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $FOLIO_ART = $_POST["FOLIO_ART"];

    // Prepara la consulta SQL de inserción
    $sql = "DELETE FROM CATEGORIA WHERE FOLIO_ART = :FOLIO_ART";

    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion, ':FOLIO_ART', $FOLIO_ART);


    //Ejecucion de la consulta
    $resultado = oci_execute($insercion);

    //verificaion de una correcta incersion
    if ($resultado) {
        echo "Donante a sido insertado correctamente";
    } else {
        echo "Error al insertar al donante: " . oci_error($conexion);
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
    $sql = "DELETE FROM CATEGORIA WHERE FOLIO_ART = :FOLIO_ART";

    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion, ':FOLIO_ART', $FOLIO_ART);


    //Ejecucion de la consulta
    $resultado = oci_execute($insercion);

    //verificaion de una correcta incersion
    if ($resultado) {
        echo "Donante a sido insertado correctamente";
    } else {
        echo "Error al insertar al donante: " . oci_error($conexion);
    }
    var_dump($_POST); // Verifica si las variables POST se reciben correctamente 
    oci_free_statement($insercion);
    oci_close($conexion);

}

?>