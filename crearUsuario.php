<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - Egram</title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<?php
    session_start();
    require "./conexion.php";
    include './funciones.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombreUsuario = $_POST['nombre']; // Cambiado a 'nombre' para que coincida con el campo del formulario
        $correoElectronico = $_POST['email']; // Cambiado a 'email' para que coincida con el campo del formulario
        $password = $_POST['password']; // Cambiado a 'password' para que coincida con el campo del formulario

        if (registerUser($nombreUsuario, $correoElectronico, $password)) {
            header('Location: index.php');
            exit();
        } else {
            $error = "Error al registrarse. Inténtalo de nuevo.";
        }
    }
?>
<body class="bg-img">
    <div class="container">
        <div class="login-box">
            <div class="login-header">
                <img src="./IMG/Egram.jpg" alt="Egram Logo">
                <h2>Regístrate en Egram:</h2>
            </div>
            <form method="POST">
                <div class="input-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="input-field" placeholder="Introduce tu nombre">
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="input-field" placeholder="Introduce tu email">
                </div>
                <div class="input-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="input-field" placeholder="Introduce una contraseña">
                </div>
                <?php if(isset($error)): ?>
                <p><?php echo $error; ?></p>
                <?php endif; ?>
                <button type="submit">Crear Cuenta</button>
            </form>
        </div>
    </div>

    <script>
        function redirectToIndex(event) {
            event.preventDefault();
            window.location.href = './index.php';
        }
    </script>
</body>
</html>

