CREATE DATABASE pfc;
use pfc;
select * from usuarios;
CREATE TABLE IF NOT EXISTS Usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    apellido VARCHAR(20),
    numero INT,
    direccion VARCHAR(20),
    edad INT,
    correo_electronico VARCHAR(90),
    contraseña varchar(20) NOT NULL,
    id_rol INTEGER
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS Productos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(40),
    precio INT,
    stock INTEGER
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS Usuario_has_productos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_producto INT,
    id_usuario INT,
    cantidad INT,
    fecha_envio DATE,
    fecha_entrega DATE
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS Jugadores(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(20),
    apellido VARCHAR(30),
    dorsal INT,
    posicion  VARCHAR(20)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS Rol(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30)
)ENGINE = InnoDB;


LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Usuarios.csv'
    INTO TABLE Usuarios
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;

LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Productos.csv'
    INTO TABLE Productos
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;

LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Usuarios_has_productos.csv'
    INTO TABLE Usuario_has_productos
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;
    
LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Jugadores.csv'
    INTO TABLE Jugadores
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '.'
    IGNORE 0 ROWS;
    
LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Rol.csv'
    INTO TABLE Rol
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;



