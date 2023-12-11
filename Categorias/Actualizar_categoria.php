<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="Img/Estilos12.css">

<header class="cabecera">
    <h1>Actualizacion de Categorias</h1>
    <h3>Aqui puedes dar Actualizar a tus Categorias :D</h3>
</header>
<nav class="menu">
<ul>
    <li><a href="../Index.php">INICIO</a></li>
    <li><a href="Altas_categoria.php">ALTAS</a></li>
    <li><a href="Bajas_categoria.php">BAJAS</a></li>

    <li><a href="libros.html">DATABASE</a></li>
    <li><a href="contactos.html">CONTACTOS</a></li>
</ul>
</nav>
<hr>
<title>Actualizacion De Categorias</title>
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
		<p>En esta seccion, puedes actualizar las categorias, para una mejor comprension del sistema implementado 
        </p>
        <p>Lamentamos el error!
        </p>
	</article>
	
</head>
<body> <center>
    <p>
    Para actualizar los datos, favor de rellenar los campos con lo que se le indica, se lo agradecemos c:
</p>
<p>
    |
    |
    |
</p>

<form method="post" action="Actualizar_Articulo.php">


<input type="text" name="FOLIO_ART" class="texto-articulo" placeholder="Act. de Folio Art">
<input type="text" name="NUEVO_NOMBRE_ART" class="texto-articulo" placeholder="Articulo a Actualizar">
<input type="text" name="NUEVO_NUMERO_DON" class="texto-articulo" placeholder="Nuevo numero del Donante">

    <!--
        <label for="FOLIO_ART"> folio de el articulo a actualizar:</label>
        <input type="text" name="FOLIO_ART" required><br><br>

        <label for="NUEVO_NOMBRE_ART"> nombre del articulo que se va a actualizar: </label>
        <input type="text" name="NUEVO_NOMBRE_ART" required><br><br>

        <label for="NUEVO_NUMERO_DON"> Numero de el donante nuevo a actualizar: </label>
        <input type="text" name="NUEVO_NUMERO_DON" required><br><br>

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
        <p>WichoDB Team (c) 2023 - Actualizacion de Categorias</p>
    </footer>
        
        
  



    </form>

</body>
</html>

<?php
include 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NUEVO_NOMBRE_ART = $_POST["NUEVO_NOMBRE_ART"];
    $NUEVO_NUMERO_DON = $_POST["NUEVO_NUMERO_DON"];
    $FOLIO_ART = $_POST["FOLIO_ART"];

    // Prepara la consulta SQL de actualización
    $sql = "UPDATE ARTICULO SET NOMBRE_ART = :NUEVO_NOMBRE_ART,
     NUMERO_DON = :NUEVO_NUMERO_DON WHERE FOLIO_ART = :FOLIO_ART";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion, ":NUEVO_NOMBRE_ART", $NUEVO_NOMBRE_ART);
    oci_bind_by_name($insercion, ":NUEVO_NUMERO_DON", $NUEVO_NUMERO_DON);
    oci_bind_by_name($insercion, ":FOLIO_ART", $FOLIO_ART);

    // Ejecución de la consulta
    $resultado = oci_execute($insercion);

    // Verificación de una actualización correcta
    if ($resultado) {
        echo "Artículo actualizado correctamente";
    } else {
        echo "Error al actualizar el artículo: " . oci_error($conexion);
    }
    var_dump($_POST); // Verifica si las variables POST se reciben correctamente
    oci_free_statement($insercion);
    oci_close($conexion);
}
?>


<?php
include 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NUEVO_NOMBRE_ART = $_POST["NUEVO_NOMBRE_ART"];
    $NUEVO_NUMERO_DON = $_POST["NUEVO_NUMERO_DON"];
    $FOLIO_ART = $_POST["FOLIO_ART"];

    // Prepara la consulta SQL de actualización
    $sql = "UPDATE ARTICULO SET NOMBRE_ART = :NUEVO_NOMBRE_ART,
     NUMERO_DON = :NUEVO_NUMERO_DON WHERE FOLIO_ART = :FOLIO_ART";
    
    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion, ":NUEVO_NOMBRE_ART", $NUEVO_NOMBRE_ART);
    oci_bind_by_name($insercion, ":NUEVO_NUMERO_DON", $NUEVO_NUMERO_DON);
    oci_bind_by_name($insercion, ":FOLIO_ART", $FOLIO_ART);

    // Ejecución de la consulta
    $resultado = oci_execute($insercion);

    // Verificación de una actualización correcta
    if ($resultado) {
        echo "Artículo actualizado correctamente";
    } else {
        echo "Error al actualizar el artículo: " . oci_error($conexion);
    }
    var_dump($_POST); // Verifica si las variables POST se reciben correctamente
    oci_free_statement($insercion);
    oci_close($conexion);
}
?>
