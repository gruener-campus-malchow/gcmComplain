<?php
session_start();

require_once("../../lib/Database.php");

//$json .= $_SERVER['REQUEST_METHOD'];

$datenbank = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	 $ergebnis = $datenbank->query("INSERT INTO `beschwerde` (`id`, `titel`, `zeit`, `reaktionszeit`, `person_email`) VALUES ('2', 'beschwrde tietel 2', current_timestamp(), '2', 'test@test.com');");    
    $json = json_encode($ergebnis);     
}else if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $json = "fioio";
}else{
    $json = "Kein Plan!";
}

echo $json;