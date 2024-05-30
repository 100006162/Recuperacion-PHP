CREATE DATABASE Recuperacion_PHP;

USE Recuperacion_PHP;

CREATE TABLE usuarios (
    ID_Usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombreUsuario VARCHAR(50) NOT NULL UNIQUE,
    correoElectronico VARCHAR(100) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    fotoPerfil VARCHAR(255) DEFAULT 'default.png',
    carpetaTemporal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE imagenes (
    ID_Imagenes INT AUTO_INCREMENT PRIMARY KEY,
    ID_Usuario INT,
    Ruta VARCHAR(255) NOT NULL,
    carpetaTemporal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ID_Usuario) REFERENCES usuarios(ID_Usuario)
);

INSERT INTO usuarios (nombreUsuario, correoElectronico, Password, fotoPerfil) VALUES 
('Claudia', 'claudia@gmail.com', 'qazQAZ123', 'claudia1.jpg'),
('Jordi', 'jordi@gmail.com', 'qazQAZ123', 'jordi2.jpg'),
('Oscar', 'oscar@gmail.com', 'qazQAZ123', 'oscar3.jpg');

INSERT INTO imagenes (ID_Usuario, Ruta) VALUES 
(1, 'uploads/imagen1.jpg'),
(2, 'uploads/imagen2.jpg'),
(3, 'uploads/imagen3.jpg');


