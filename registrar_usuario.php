<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidoPaterno = $_POST["apellidoPaterno"];
    $apellidoMaterno = $_POST["apellidoMaterno"];
    $correo = $_POST["correo"];
    $curp = $_POST["curp"];
    $contrasenia = $_POST["contrasenia"];

    try {
        if (!preg_match("/^[a-zA-Z]+$/", $nombre)) {
            throw new Exception("El nombre solo debe contener caracteres (a-z, A-Z).");
        }

        if (!preg_match("/^[a-zA-Z]+$/", $apellidoPaterno)) {
            throw new Exception("El apellido paterno solo debe contener caracteres (a-z, A-Z).");
        }

        if (!preg_match("/^[a-zA-Z]+$/", $apellidoMaterno)) {
            throw new Exception("El apellido materno solo debe contener caracteres (a-z, A-Z).");
        }

        if (!preg_match("/.{18}/", $curp)) {
            throw new Exception("El CURP debe tener una longitud exacta de 18 dígitos.");
        }

        // Resto del código para registrar el usuario
        // ...

        echo '<label class="success-message">Nuevo usuario creado.</label>';
    } catch (Exception $e) {
        echo '<p class="error-message">Error: ' . $e->getMessage() . '</p>';
    }
}
?>