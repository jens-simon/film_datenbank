<?php
error_reporting(1);

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';


if (!empty($_GET['id'])) {

    $sql = 'DELETE FROM filme WHERE id = :id';


    $statement = $db->prepare($sql);
    $statement->execute($_GET);
}

redirect('index.php');