<?php

require_once("config.php");
require_once("Database.php");


$databaseobject = new Database(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

<<<<<<< HEAD


// Verarbeitung der Eingabe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['user_name']);
    echo "Hallo, " . $name;
}
else {
// Textfeld für Datenbankname
echo '<form method="post" action="">';
echo '<label for="DBname">Datenbankname:</label>';
echo '<input type="text" id="DBname" DBname="DB_name" maxlength="50" placeholder="Musterdatenbank">';

// Textfeld für Benutzername
echo '<label for="name">Benutzername:</label>';
echo '<input type="text" id="name" name="user_name" maxlength="50" placeholder="Max Mustermann">';

// Textfeld für Passwort
echo '<label for="pw">Passwort:</label>';
echo '<input type="text" id="pw" pw="Password" placeholder="1234">';

// Textfeld für Host
echo '<label for="server Host">Host:</label>';
echo '<input type="text" id="server Host" server Host="Host_name" placeholder="localhost">';
echo '<input type="submit" value="Senden">';
echo '</form>';
}

=======
echo '<!DOCTYPE html><html lang="de">
    <head>
        <link rel="stylesheet" href="https://gcm.schule/index.css">
        <title>Install</title>
    </head>
<body>
    <h1 class="cis-header">Installation</h1>';





try {
    $sql_init_database = file_get_contents("datenbank.sql");
    $databaseobject->query($sql_init_database);
} catch (Exception $e) {
    echo 'Failed to initiate database: ' . $e->getMessage();
}

echo '<textarea rows="20" cols="100">'.$sql_init_database.'</textarea>';

try {
    $EULA = file_get_contents("EULA.txt");
    echo '<textarea rows="20" cols="100">'.$EULA.'</textarea>';
} catch (Exception $e) {
    echo "Couldn't load EULA" . $e->getMessage();
}



echo"</body></html>";




>>>>>>> 4745c3b2bf244a5863997c75618f16b406f02fd7
