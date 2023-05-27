<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido al sistema</h1>
    </header>
    <div class="container">
        <form action="login.php" method="POST">
            <h2>Iniciar sesión</h2>
            <input type="text" name="nombre_usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit" value="Acceder">Ingresar</button>
        </form>
    </div>
    <footer>
        <p>Omar Antonio Juarez Escorcia   PW1</p>
    </footer>
</body>
</html>