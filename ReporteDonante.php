<?php


// Incluye la clase TCPDF y la extensión OCI8
require('Conexion.php');
require('Librerias/TCPDF-main/tcpdf.php');
require('Librerias/TCPDF-main/tcpdf_autoconfig.php');
require('Librerias/TCPDF-main/tcpdf_import.php');
require('Librerias/TCPDF-main/tcpdf_barcodes_1d.php');
require('Librerias/TCPDF-main/tcpdf_barcodes_2d.php');


//require('Librerias/TCPDF-main/tcpdf_parser.php');








// Resto del código...

// Realiza la consulta a la base de datos Oracle
// Realiza la consulta a la base de datos Oracle
$query = "SELECT * FROM DONANTE";
$stid = oci_parse($conexion, $query);
oci_execute($stid); // Ejecuta la consulta


// Crea un nuevo objeto TCPDF
$pdf = new TCPDF();
$pdf->AddPage();

// Configura el encabezado de la tabla
$pdf->SetFont('helvetica', 'B', 12);

// Agrega más celdas según la cantidad de columnas en tu tabla
$pdf->Cell(40, 10, 'Nombre del Donante', 1);
$pdf->Cell(40, 10, 'Numero de Donante', 1);
// ...
$pdf->Ln();

// Llena la tabla con los resultados de la consulta
$pdf->SetFont('helvetica', '', 12);
$pdf->SetFont('helvetica', '', 12);
while ($row = oci_fetch_assoc($stid)) {
    $pdf->Cell(40, 10, $row['NOMBRE_DON'], 1);  // Reemplaza 'NOMBRE_COLUMNAX' con el nombre de tus columnas
    $pdf->Cell(40, 10, $row['NUMERO_DON'], 1);
    // ...
    $pdf->Ln();
}

// Cierra la conexión a la base de datos Oracle
oci_free_statement($stid);
oci_close($conexion);

// Genera el archivo PDF
$pdf->Output('resultado_consulta.pdf', 'D');
?>
