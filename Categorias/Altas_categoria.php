<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Img/Estilos12.css">

<header class="cabecera">
    <h1>Altas de Categorias</h1>
    <h3>Aqui puedes dar de alta a tus Categorias :D</h3>
</header>
<nav class="menu">
<ul>
    <li><a href="../Index.php">INICIO</a></li>
    <li><a href="Bajas_categoria.php">BAJAS</a></li>
    <li><a href="Actualizar_categoria.php">ACTUALIZACION</a></li>

    <li><a href="libros.html">DATABASE</a></li>
    <li><a href="contactos.html">CONTACTOS</a></li>
</ul>
</nav>
<hr>
<title>Altas De Categorias</title>
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
		<p>En esta seccion, puedes dar de alta las categorias, para una mejor comprension del sistema implementado 
        </p>
        <p>Gracias por tu donacion!
        </p>
	</article>
	
</head>
<body> <center>
    <h2></h2>
    <form method="post" action="Altas_categoria.php">
        <p>
            Llena los siguentes campos </p>

            <p>

            |
            |
            |
</p>

        <input type="text" name="FOLIO_ART" class="texto-articulo" placeholder="Alta de Folio Art">
        <input type="text" name="DESCRIPCION_CAT" class="texto-donante" placeholder="Descripcion de Categoria">
        <input type="text" name="ESTADO_CAT" class="texto-donante" placeholder="Estado del Articulo">

<!--
        <label for="FOLIO_ART"> folio del articulo para categorisar:</label>
        <input type="text" name="FOLIO_ART" required><br><br>

        <label for="DESCRIPCION_CAT"> descripcion de la categoria:</label>
        <input type="text" name="DESCRIPCION_CAT" required><br><br>

        <label for="ESTADO_CAT"> estado en el que se encuentra el articulo:</label>
        <input type="text" name="ESTADO_CAT" required><br><br>

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
        <p>WichoDB Team (c) 2023 - Alta de Categorias</p>
    </footer>
        
        
  



    </form>

</body>
</html>









<?php
include 'Conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $FOLIO_ART = $_POST["FOLIO_ART"];
    $DESCRIPCION_CAT = $_POST["DESCRIPCION_CAT"];
    $ESTADO_CAT = $_POST["ESTADO_CAT"];



    // Prepara la consulta SQL de inserción
    $sql = "INSERT INTO CATEGORIA (FOLIO_ART, DESCRIPCION_CAT, ESTADO_CAT) 
    VALUES (:FOLIO_ART, :DESCRIPCION_CAT, :ESTADO_CAT)";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion,":FOLIO_ART",$FOLIO_ART);
    oci_bind_by_name($insercion,":DESCRIPCION_CAT",$DESCRIPCION_CAT);
    oci_bind_by_name($insercion,":ESTADO_CAT",$ESTADO_CAT);

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

?>+









<?php
include 'Conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $FOLIO_ART = $_POST["FOLIO_ART"];
    $DESCRIPCION_CAT = $_POST["DESCRIPCION_CAT"];
    $ESTADO_CAT = $_POST["ESTADO_CAT"];



    // Prepara la consulta SQL de inserción
    $sql = "INSERT INTO CATEGORIA (FOLIO_ART, DESCRIPCION_CAT, ESTADO_CAT) 
    VALUES (:FOLIO_ART, :DESCRIPCION_CAT, :ESTADO_CAT)";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion,":FOLIO_ART",$FOLIO_ART);
    oci_bind_by_name($insercion,":DESCRIPCION_CAT",$DESCRIPCION_CAT);
    oci_bind_by_name($insercion,":ESTADO_CAT",$ESTADO_CAT);

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

?>+