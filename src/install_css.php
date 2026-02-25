<?php

require_once("config.php");
require_once("Database.php");


$databaseobject = new Database(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

echo '<!DOCTYPE html><html lang="de">
    <head>
        <link rel="stylesheet" href="https://gcm.schule/index.css">
        <title>Install</title>
    </head>
<body>
    <h1 class="cis-header">Installation</h1>';



try{
    $sqlcode=file_get_contents('datenbank.sql');
}
catch(Exception $e)
{
    echo 'Hier ist ein Fehler aufgetreten: '.$e;
}

echo '<textarea rows="20" cols="100">'.$sqlcode.'</textarea>';

echo"</body></html>";
