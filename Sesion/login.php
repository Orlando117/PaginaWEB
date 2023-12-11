<?php
include 'Conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $sql = "SELECT * FROM USUARIOS WHERE CORREO = :correo AND CONTRASENA = :contrasena";

    $insercion = oci_parse($conexion, $sql);
    oci_bind_by_name($insercion, ":correo", $correo);
    oci_bind_by_name($insercion, ":contrasena", $contrasena);

    // Ejecucion de la consulta
    $resultado = oci_execute($insercion);

    // Obtener el resultado como un array asociativo
    $row = oci_fetch_assoc($insercion);

    if ($row) {
        // Autenticación exitosa
        // Puedes hacer lo que necesites con $row
        session_start();
        $_SESSION['user'] = $row['CORREO'];
        // Otras asignaciones según tus necesidades

        // Redireccionar a la página de bienvenida
        header("Location: ../bienvenida.php");
    } else {
        // Autenticación fallida
        // Puedes redirigir a una página de error o mostrar un mensaje, según tus necesidades
        header("Location: ../index2.php");
        print "¡Verifica tu correo o contraseña!  ";
    }

    oci_free_statement($insercion);
    oci_close($conexion);
}
?>
