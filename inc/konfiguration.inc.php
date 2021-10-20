<?php

error_reporting(E_ALL); // im produktiven Umfeld deaktivieren
date_default_timezone_set('Europe/Berlin'); // oder php.ini
//echo dirname(__FILE__) . '/datenbank.inc.php';

require_once dirname(__FILE__) . '/datenbank.inc.php';
