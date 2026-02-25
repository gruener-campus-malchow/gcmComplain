<?php

require_once("config.php");
require_once("Database.php");


$databaseobject = new Database(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

try {
	$sql_init_database = file_get_contents("datenbank.sql");
	$databaseobject->query($sql_init_database);
} catch (Exception $e) {
	echo 'Failed to initiate database: ' . $e->getMessage();
}