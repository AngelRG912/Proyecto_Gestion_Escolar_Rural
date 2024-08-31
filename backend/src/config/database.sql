CREATE TABLE usuarios (
    id_usuario INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(255) NOT NULL,
    cargo VARCHAR(255) NOT NULL,
    
    password VARCHAR(255) NOT NULL,
    fyh_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    fyh_actualizacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    estado VARCHAR(8) DEFAULT 'activo'
)ENGINE=InnoDB;
INSERT INTO usuarios (nombres,cargo,password,fyh_creacion,estado)
VALUES ('Luis Antonio','directivo','sandia12',"2024-08-30 22:58:20","1")
