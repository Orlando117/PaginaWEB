<?php
    //Crear la conexion son SQL developer con USUARIO, CONTRASEÑA, PUERTO
$conexion = oci_connect("system", "jose333", "localhost/xe");

if (!$conexion) {
  
$m = oci_error();
echo $m['message'], "\n";
exit;
}
else { 
//print "¡Conexion de la base de datos correcta!  ";
}

// Close the Oracle connection
//oci_close($conexion);

?>