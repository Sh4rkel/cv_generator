CREATE DATABASE cv_generator;

GRANT ALL PRIVILEGES ON cv_generator.* TO 'root'@'localhost';
FLUSH PRIVILEGES;
USE cv_generator;

CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(50) NOT NULL UNIQUE,
                       password VARCHAR(255) NOT NULL
);

