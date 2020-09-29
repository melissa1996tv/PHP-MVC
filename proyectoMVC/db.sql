
CREATE DATABASE Villarreal;

USE Villarreal;

CREATE TABLE users
(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone INT(10) NOT NULL,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO users (name,email,phone) VALUES
('Melissa','melissa.tv.4106@hotmail.com',945310893);
