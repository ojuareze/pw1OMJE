<!DOCTYPE html>
<html>
<head>
    <title>Ventas</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Sistema de Ventas</h1>
    </header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="OMJEventas.html">Ventas</a></li>
                <li><a href="OMJEdetalles_ventas.html">Detalles de ventas</a></li>
                <li><a href="OMJEcatalogo_productos.html">Catálogo de productos</a></li>
                <li><a href="OMJEcatalogo_marcas.html">Catálogo de marcas</a></li>
                <li><a href="OMJEreportes.html">Reportes de ventas</a></li>
            </ul>
        </nav>
        <main>
            <h2>Ventas</h2>
            <form action="guardar_venta.php" method="post">
                <label for="producto">Producto:</label>
                <input type="text" name="producto" required>
                <label for="PrecioVentaUnitario">Precio de Venta Unitario:</label>
                <input type="number" step="0.01" name="PrecioVentaUnitario" required>
                <label for="PrecioCostoUnitario">Precio Costo Unitario:</label>
                <input type="number" step="0.01" name="PrecioCostoUnitario" required>
                <label for="codigoDeBarras">Código de Barras:</label>
                <input type="text" name="codigoDeBarras" maxlength="13">
                <label for="fechaDeCompra">Fecha de Compra:</label>
                <input type="date" name="fechaDeCompra" required>
                <button type="submit">Registrar Venta</button>
            </form>
        </main>
    </div>
    <footer>
        <p>Omar Antonio Juarez Escorcia   PW1</p>
    </footer>
</body>
</html>

