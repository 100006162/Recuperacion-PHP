<?php
// Función para registrar un nuevo usuario
function registerUser($username, $email, $password) {
    global $conexion;

    // Preparar la declaración SQL para insertar el nuevo usuario
    $sql = "INSERT INTO usuarios (nombreUsuario, correoElectronico, Password) VALUES (:username, :email, :password)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    // Ejecutar la declaración SQL
    if ($stmt->execute()) {
        // Registro exitoso
        return true;
    } else {
        // Error en el registro
        return false;
    }
}


// Función para insertar una nueva imagen
function insertImage($userID, $ruta) {
    global $conexion;

    // Preparar la declaración SQL para insertar la nueva imagen
    $sql = "INSERT INTO imagenes (ID_Usuario, Ruta) VALUES (:userID, :ruta)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':userID', $userID);
    $stmt->bindParam(':ruta', $ruta);

    // Ejecutar la declaración SQL
    if ($stmt->execute()) {
        // Inserción exitosa
        return true;
    } else {
        // Error en la inserción
        return false;
    }
}

?>
