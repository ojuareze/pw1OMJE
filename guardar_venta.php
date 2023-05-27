<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = $_POST["producto"];
    $precioVentaUnitario = $_POST["PrecioVentaUnitario"];
    $precioCostoUnitario = $_POST["PrecioCostoUnitario"];
    $codigoDeBarras = $_POST["codigoDeBarras"];
    $fechaDeCompra = $_POST["fechaDeCompra"];

    try {
        if (!preg_match("/^[a-zA-Z]+$/", $producto)) {
            throw new Exception("El producto solo debe contener caracteres (a-z, A-Z).");
        }

        if ($precioVentaUnitario <= 0.01) {
            throw new Exception("El precio de venta unitario debe ser un valor positivo mayor a 0.01.");
        }

        if ($precioCostoUnitario <= 0.01) {
            throw new Exception("El precio costo unitario debe ser un valor positivo mayor a 0.01.");
        }

        if (strlen($codigoDeBarras) > 13) {
            throw new Exception("El código de barras debe tener una longitud máxima de 13 caracteres.");
        }

        $fechaLimite = "2023-01-01";
        if ($fechaDeCompra <= $fechaLimite) {
            throw new Exception("La fecha de compra debe ser mayor a 01/01/2023.");
        }

        // Resto del código para guardar la venta
        // ...

        echo '<p class="success-message">Venta registrada exitosamente.</p>';
    } catch (Exception $e) {
        echo '<p class="error-message">Error: ' . $e->getMessage() . '</p>';
    }
}
?>
