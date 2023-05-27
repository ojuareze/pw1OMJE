<!DOCTYPE html>
<html>
<head>
    <title>Sección Operativa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Sistema de Ventas</h1>
    </header>
    
    <div class="container">
        <nav>
            <ul>
                <li><a href="OMJEoperativa.html">Sección Operativa</a></li>
                <li><a href="OMJEadmin_ventas.html">Ventas</a></li>
                <li><a href="OMJEadmin_detalles_ventas.html">Detalles de ventas</a></li>
                <li><a href="OMJEadmin_catalogo_productos.html">Catálogo de productos</a></li>
                <li><a href="OMJEadmin_catalogo_marcas.html">Catálogo de marcas</a></li>
                <li><a href="OMJEadmin_reportes.html">Reportes de ventas</a></li>
            </ul>
        </nav>
        
        <div class="content">
            <h2>Sección Operativa</h2>
            
            <button id="agregarUsuarioBtn" onclick="mostrarFormulario()">Agregar Usuario</button>
            
            <form id="formularioUsuario" style="display: none;" action="registrar_usuario.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required pattern="[a-zA-Z]+" title="Solo se permiten letras (a-z, A-Z)">
                <br>
                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" id="apellidoPaterno" name="apellidoPaterno" required pattern="[a-zA-Z]+" title="Solo se permiten letras (a-z, A-Z)">
                <br>
                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" id="apellidoMaterno" name="apellidoMaterno" required pattern="[a-zA-Z]+" title="Solo se permiten letras (a-z, A-Z)">
                <br>
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
                <br>
                <label for="curp">CURP:</label>
                <input type="text" id="curp" name="curp" required pattern=".{18}" title="El CURP debe tener una longitud exacta de 18 dígitos">
                <br>
                <label for="contrasenia">Contraseña:</label>
                <input type="password" id="contrasenia" name="contrasenia" required>
                <br>
                <input type="submit" value="Registrar Usuario">
            </form>

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
        </div>
    </div>
    
    <footer>
        <p>Omar Antonio Juarez Escorcia   PW1</p>
    </footer>
    
    <script>
        function mostrarFormulario() {
            var formulario = document.getElementById("formularioUsuario");
            formulario.style.display = "block";
        }
    </script>
</body>
</html>