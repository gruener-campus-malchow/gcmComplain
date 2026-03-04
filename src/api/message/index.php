<?php
session_start();

require_once("../../lib/Database.php");

//$json .= $_SERVER['REQUEST_METHOD'];

$datenbank = new Database();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $json = "will was speichern";
}else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $ergebnis = $datenbank->query("SELECT * FROM person");
    $json = json_encode($ergebnis);
}else{
    $json = "Kein Plan!";
}

echo $json;


