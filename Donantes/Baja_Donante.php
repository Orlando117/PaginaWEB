<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Img/Estilos32.css">

<header class="cabecera">
    <h1>Bajas de Donantes</h1>
    <h3>Aqui puedes dar de baja a tus Donantes D:</h3>
</header>
<nav class="menu">
<ul>
    <li><a href="../Index.php">INICIO</a></li>
    <li><a href="Altas_Donante.php">ALTAS</a></li>
    <li><a href="libros.html">DATABASE</a></li>
    <li><a href="contactos.html">CONTACTOS</a></li>
</ul>
</nav>
<hr>
<title>Bajas De Donantes</title>
</head>
<body>
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
		<p>En esta seccion, puedes dar de baja a tus Donantes, para una mejor comprension del sistema implementado 
        </p>
        <p>Sentimos el error, espero pueda solucionarse. Confia en ti !
        </p>
	</article>

    <center>
<p> Escribe el Numero del donante a Eliminar</p>
<form method="post" action="Baja_Donante.php">

<p>
    |
    |
    |
</p>
<input type="text" name="NUMERO_DON" class="texto-articulo" placeholder="Num. Donanate a borrar ">


<!--
            <label for="NUMERO_DON">Número del donante a eliminar:</label>
            <input type="number" name="NUMERO_DON" required><br><br>
            <input type="submit" value="Eliminar">
            <p>
-->
</p>
<center>
        <input type="submit" value="Eliminar">
    </center>
<p>



<a href="../ReporteDonante.php">
    <img src="img/imp.png" alt="Impresora">
</a><br>




</p>
<footer class="piedepagina">
        <p>WichoDB Team (c) 2023 - Baja de Donantes</p>
    </footer>
        
        
  



    </form>

</body>
</html>

<?php
include 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NUMERO_DON = $_POST["NUMERO_DON"];

    // Prepara la consulta SQL de eliminación
    $sql = "DELETE FROM DONANTE WHERE NUMERO_DON = :NUMERO_DON";

    $eliminacion = oci_parse($conexion, $sql);
    oci_bind_by_name($eliminacion, ":NUMERO_DON", $NUMERO_DON);

    // Ejecución de la consulta de eliminación
    $resultado = oci_execute($eliminacion);

    // Verificación de una correcta eliminación
    if ($resultado) {
        echo "Donante ha sido eliminado correctamente";
    } else {
        echo "Error al eliminar al donante: " . oci_error($conexion);
    }

    oci_free_statement($eliminacion);
    oci_close($conexion);
}
?>


<?php
include 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NUMERO_DON = $_POST["NUMERO_DON"];

    // Prepara la consulta SQL de eliminación
    $sql = "DELETE FROM DONANTE WHERE NUMERO_DON = :NUMERO_DON";

    $eliminacion = oci_parse($conexion, $sql);
    oci_bind_by_name($eliminacion, ":NUMERO_DON", $NUMERO_DON);

    // Ejecución de la consulta de eliminación
    $resultado = oci_execute($eliminacion);

    // Verificación de una correcta eliminación
    if ($resultado) {
        echo "Donante ha sido eliminado correctamente";
    } else {
        echo "Error al eliminar al donante: " . oci_error($conexion);
    }

    oci_free_statement($eliminacion);
    oci_close($conexion);
}
?>
