<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Img/Estilos32.css">

<header class="cabecera">
    <h1>Altas de Donantes</h1>
    <h3>Aqui puedes dar de alta a tus Donantes :D</h3>
</header>
<nav class="menu">
<ul>
    <li><a href="../Index.php">INICIO</a></li>
    <li><a href="Baja_Donante.php">BAJAS</a></li>
    <li><a href="libros.html">DATABASE</a></li>
    <li><a href="contactos.html">CONTACTOS</a></li>
</ul>
</nav>
<hr>
<title>Altas De Donantes</title>
</head>
<body> <center>
<section class="cuerpo">
	
	<article class="iconos">
		<h3>SERVICIOS</h3>
		<div>
			<img src="img/icono-1.png" alt="">		
			<p>Altas de Donantes</p>
		</div>
		<div>
			<img src="img/icono-2.png" alt="">		
			<p>Baja de Donantes</p>
		</div>
		<div>
			<img src="img/icono-3.png" alt="">		
			<p>Base de Datos</p>
		</div>
		<div>
			<img src="img/icono-4.png" alt="">		
			<p>Visualizacion de Datos</p>
		</div>
		
	</article>
	
    <article class="bienvenida">
		<p>En esta seccion, puedes dar de alta a tus Donantes, para una mejor comprension del sistema implementado 
        </p>
        <p>Gracias por tu donante por tu caridad !
        </p>
	</article>

    <form method="post" action="Altas_Donante.php">
<p>
    Por favor, escribe el nombre del donante
</p>
<p>
    |
    |
    |
</p>
<input type="text" name="NOMBRE_DON" class="texto-articulo" placeholder="Nombre del Donanate ">

    <!--
        <label for="NOMBRE_DON"> nombre del donante:</label>
        <input type="text" name="NOMBRE_DON" required><br><br>

        <input type="submit" value="Guardar">
-->



        <p>

</p>
<center>
        <input type="submit" value="Guardar">
    </center>
<p>



<a href="../ReporteDonante.php">
    <img src="img/imp.png" alt="Impresora">
</a><br>
        
        
  



    </form>

</body>
</html>
<?php
include 'Conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $NOMBRE_DON = $_POST["NOMBRE_DON"];


    // Prepara la consulta SQL de inserción
    $sql = "INSERT INTO DONANTE (NOMBRE_DON) VALUES (:NOMBRE_DON)";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion,":NOMBRE_DON",$NOMBRE_DON);

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
    $NOMBRE_DON = $_POST["NOMBRE_DON"];


    // Prepara la consulta SQL de inserción
    $sql = "INSERT INTO DONANTE (NOMBRE_DON) VALUES (:NOMBRE_DON)";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion,":NOMBRE_DON",$NOMBRE_DON);

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