DROP DATABASE IF EXISTS srs;
CREATE DATABASE srs;
USE srs;

-- Table for 'user'
CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- Insert admin
INSERT INTO user (username, email, password)
VALUES
    ("admin", "admin@gmail.com", "e10adc3949ba59abbe56e057f20f883e");