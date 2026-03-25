<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once("src/lib/Database.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HTML5 Boilerplate</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <script src="scripts.js"></script>
</body>

</html>


<?php

if ($_SERVER['REQUEST_METHOD']=="POST" and isset($_POST['username']))
{
    echo "besorge das Salz";
    $db = new Database();
}
else{
    echo ' <form method=post>
                username:<input type text name=username value="Bitte hier eintragen">
                <input type=submit name=absenden value=ok>
           </form>';
}

?>