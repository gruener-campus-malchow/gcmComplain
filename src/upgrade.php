<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("src/lib/Database.php");


$databaseobject = new Database("src/config.php");

try {
    $sql_init_database = file_get_contents("datenbank.sql");
    $databaseobject->query($sql_init_database);
} catch (Exception $e) {
    echo 'Failed to initiate database: ' . $e->getMessage();
}

echo '<textarea rows="20" cols="100">'.$sql_init_database.'</textarea>';
