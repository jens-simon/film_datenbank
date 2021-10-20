<?php

require_once 'inc/datenbank.inc.php';

// falls die Tabellen schon existieren, wegräumen
$db->query('DROP TABLE IF EXISTS genres');
$db->query('DROP TABLE IF EXISTS filme');

$db->query(
    'CREATE TABLE genres (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255) UNIQUE KEY
    ) DEFAULT CHARSET = utf8'
);

$db->query(
    'CREATE TABLE filme (
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        titel VARCHAR(255),
        veroeffentlichung DATE,
        dauer INT(5),
        genre_id INTEGER
    ) DEFAULT CHARSET = utf8'
);

$genres = ["Action", "Drama", "Komödie", "Sci-Fi"];

$statement = $db->prepare('INSERT INTO genres (titel) VALUES (?)');
foreach ($genres as $title) {
    $statement->execute([$title]);
}
$id = $db->lastInsertId();

$db->query(
    'INSERT INTO filme (titel, veroeffentlichung, dauer, genre_id) VALUES
        ("Dune", "1984-12-14",  137, ' . $id . '),
        ("Total Recall", "1990-07-26",  113, ' . $id . ')
    '
);

//echo "fertig! bitte die Datei deaktivieren!";
//rename('install.php','install_deaktiviert.php');
unlink('install.php');