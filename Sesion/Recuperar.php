<?php
// El mensaje
$mensaje = "Línea 1\r\nLínea 2\r\nLínea 3 no se que mas escribir ojala fucione";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviarlo
mail('jose000.jao@gmail.com', 'Mi título de ejemplo', $mensaje);
?>