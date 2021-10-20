DROP TABLE IF EXISTS genres;

DROP TABLE IF EXISTS filme;

CREATE TABLE genres (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255) UNIQUE KEY
    ) DEFAULT CHARSET = utf8;


CREATE TABLE filme (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255),
        veroeffentlichung DATE,
        dauer INT(5),
        genre_id INTEGER
    ) DEFAULT CHARSET = utf8;




INSERT INTO genres (titel) VALUES ("Action");
INSERT INTO genres (titel) VALUES ("Drama");
INSERT INTO genres (titel) VALUES ("Komödie");
INSERT INTO genres (titel) VALUES ("Sci-Fi");
    
INSERT INTO filme 
(titel, veroeffentlichung, dauer, genre_id) 
VALUES
("Dune", "1984-12-14",  137, 4),
("Total Recall", "1990-07-26",  113, 4);


