<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos.css">
    <header class="cabecera">
    
        <h1>Actualizacion de Articulos</h1>
        <h3>Aqui puedes actualizar tus Articulos :D</h3>
    </header>
    <nav class="menu">
	<ul>
		<li><a href="../Index.php">INICIO</a></li>
		<li><a href="Altas_Articulo.php">ALTAS</a></li>
		<li><a href="Bajas_Articulo.php">BAJAS</a></li>
		<li><a href="libros.html">DATABASE</a></li>
		<li><a href="contactos.html">CONTACTOS</a></li>
	</ul>
</nav>
<hr>
    <title>Actualizacion de un articulo</title>
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
		<p>En esta seccion, puedes dar de actualizar tus articulos donados, los cuales se podran refeljar en la base de datos
            y llevar un registro de los mismos
        </p>
        <p>Gracias por tu donacion!
        </p>
	</article>
	



    <form method="post" action="Actualizar_Articulo.php">
    <fieldset>
    <legend>Información del artículo</legend>
    <input type="text" name="FOLIO_ART" required placeholder="Ingresa el folio" class="texto-articulo">
  </fieldset>

  <fieldset>
    <legend>Información del nuevo artículo</legend>

    <select name="NUEVO_NOMBRE_ART" required class="texto-articulo">
      <option value="">Selecciona una opción</option>
      <option value="Ropa">Ropa</option>
      <option value="Muebles">Muebles</option>
      <option value="Electrodomésticos">Electrodomésticos</option>
    </select>


    <input type="text" name="NUEVO_NUMERO_DON" required placeholder="Ingresa el num. de donante" class="texto-donante">
  </fieldset>



<!--
        <label for="FOLIO_ART"> folio de el articulo a actualizar:</label>
        <input type="text" name="FOLIO_ART" required><br><br>

        <label for="NUEVO_NOMBRE_ART"> nombre del articulo que se va a actualizar: </label>
        <input type="text" name="NUEVO_NOMBRE_ART" required><br><br>

        <label for="NUEVO_NUMERO_DON"> Numero de el donante nuevo a actualizar: </label>
        <input type="text" name="NUEVO_NUMERO_DON" required><br><br>

        <input type="submit" value="Guardar">
-->

        </form>
       

<p>
    
</p>
<p>
</p>
<button type="submit">Actualizar</button>
<p>
</p>
       
       

<form action="../ReporteArticulo.php">
    <button type="submit">
        <img src="img/imp.png" alt="Impresora">
    </button>
</form>



    <footer class="piedepagina">
        <p>WichoDB Team (c) 2023 - Actualizacion de Articulos</p>
    </footer>
        
        
</center>
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
