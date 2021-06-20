DROP DATABASE IF EXISTS library;
CREATE DATABASE library CHARACTER SET 'utf8';
USE library;


CREATE TABLE Customer(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  lastname VARCHAR(50) NOT NULL,
  firstname VARCHAR(50) NOT NULL,
  age INT NOT NULL,
  date_signup TIMESTAMP NOT NULL,
  email VARCHAR(50) NOT NULL ,
  city VARCHAR(30) NOT NULL,
  city_code CHAR(5) NOT NULL,

  PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO Customer(lastname, firstname, age, date_signup, email, city, city_code)
VALUES
("Dupont", "Richard", 19, NOW(), "r.dupont@gmail.com", "Rouen", "76100"),
("Melez", "Claire", 29, NOW(), "clairemelez@outlook.com", "Rouen", "76000"),
("Belhadj", "Yacine", 20, NOW(), "yac@outlook.com", "Rouen", "76000"),
("Diallo", "Mamadou", 36, NOW(), "mamad@outlook.com", "Rouen", "76000");

CREATE TABLE Book(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  author VARCHAR(50) NOT NULL,
  book_type VARCHAR(50) NOT NULL,
  release_date CHAR (5) NOT NULL,
  borrow BOOLEAN NULL,
  borrow_date TIMESTAMP NULL, 
  summary TEXT NOT NULL,
  customer_id INT UNSIGNED NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (customer_id) REFERENCES Customer(id)
)
ENGINE=InnoDB;

INSERT INTO Book(title, author, book_type, release_date, borrow, borrow_date, summary, customer_id)
VALUES
("Comprendre l'empire", "alain soral", "essai", "2001", 1, NOW(), "Auteur d’essais polémiques à succès de Sociologie du dragueur , Vers la féminisation ? , Jusqu’où va-t-on descendre ? et Socrate à Saint-Tropez , Alain Soral dérange, agace, mais il est l’un des rares penseurs de sa génération à se poser et à poser les bonnes questions : celles qui font mal, parfois, et surtout celle que l’on n’aime pas s’entendre poser.",  1),
("Les mythes fondateurs du choc des civilisations", "youssef hindi", "essai", "2015", 0, NOW(),"Le nouveau livre de Youssef Hindi se situe dans le prolongement de son précédent ouvrage à succès Occident et Islam, Tome I : Sources et genèse messianiques du sionisme. De l'Europe médiévale au Choc des civilisations (Sigest, 2015), et ouvre la voie au Tome II. Bien que les travaux présentés dans son premier ouvrage dont les thèses n'ont à ce jour souffert d'aucune réfutation ont désormais fait la lumière sur les origines et les finalités du sionisme et de la stratégie du Choc des civilisations, il n'en demeure pas moins.", NULL),
("Les misérable", "victor hugo", "roman", "1862",  1, NOW(),"blabla", 3),
("Madame de BOVARY", "Gustave Flaubert", "roman", "1857", 0, NOW(), "Flaubert commence le roman en 1851 et y travaille pendant cinq ans, jusqu’en 1856. À partir d’octobre, le texte est publié dans la Revue de Paris sous la forme de feuilleton jusqu’au 15 décembre suivant. En février 1857, le gérant de la revue, Léon Laurent-Pichat, l’imprimeur et Gustave Flaubert sont jugés pour « outrage à la morale publique et religieuse et aux bonnes mœurs ».", NULL),
("Le corbeau et le renard", "jean de la Fontaine", "poésie","1668", 1, NOW(), "Le Corbeau et le Renard est la deuxième fable du Livre I des Fables de La Fontaine situé dans le premier recueil des Fables, édité pour la première fois en 1668.", 4);