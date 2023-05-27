<?php
// Datos de la tabla de usuarios
$usuarios = array(
    array(
        "nombre" => "User_admin",
        "password" => "ES162007762",
        "rol" => "administrador",
        "permisos" => array("administracion", "operativa")
    ),
    array(
        "nombre" => "user_mostrador",
        "password" => "ES162007762",
        "rol" => "encargado de mostrador",
        "permisos" => array("operativa")
    )
);

// Obtener datos del formulario
$nombreUsuario = $_POST['nombre_usuario'];
$password = $_POST['password'];

// Validar información
$accesoPermitido = false;
$rolUsuario = "";
$permisosUsuario = array();

foreach ($usuarios as $usuario) {
    if ($usuario['nombre'] === $nombreUsuario && $usuario['password'] === $password) {
        $accesoPermitido = true;
        $rolUsuario = $usuario['rol'];
        $permisosUsuario = $usuario['permisos'];
        break;
    }
}

// Redireccionar según el acceso permitido
if ($accesoPermitido) {
    if ($rolUsuario === "administrador" && in_array("administracion", $permisosUsuario)) {
        header("Location: OMJEOperaciones.php"); // Redirigir a la sección operativa para el rol de administrador
        exit();
    } elseif ($rolUsuario === "encargado de mostrador" && in_array("operativa", $permisosUsuario)) {
        header("Location: OMJEventas.php"); // Redirigir a la página de ventas para el rol de encargado de mostrador
        exit();
    } else {
        echo "No tienes permisos suficientes para acceder.";
    }
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>