DROP DATABASE IF EXISTS library;
CREATE DATABASE library CHARACTER SET 'utf8';
USE library;


CREATE TABLE customer(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  lastname VARCHAR(50) NOT NULL,
  firstname VARCHAR(50) NOT NULL,
  age INT NOT NULL,
  date_signup DATE NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  city VARCHAR(30) NOT NULL,
  city_code CHAR(5) NOT NULL,
  adress VARCHAR(50) NOT NULL,
  sex CHAR(1) NOT NULL,
  password VARCHAR(255) NOT NULL,
  
  PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO User(lastname, firstname, email, city, city_code, adress, sex, password, birth_date)
VALUES
("Dupont", "Richard", "r.dupont@gmail.com", "Rouen", "76100", "9 rue du gros horloge", "h", "password1", "1962-05-21"),
("Melez", "Claire", "clairemelez@outlook.com", "Lille", "59100", "45 rue du Molinel", "f", "password2", "1989-11-14");