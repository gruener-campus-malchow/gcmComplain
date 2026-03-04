<?php
session_start();

require_once("../../lib/Database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = "will was speichern";
}else if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $json = "will was wissen";
}else{
    $json = "Kein Plan!";
}

$json .= $_SERVER['REQUEST_METHOD'];

$datenbank = new Database();

$ergebnis = $datenbank->query("SELECT * FROM person");

echo $json.json_encode($ergebnis);


