<?php

session_start();

if(!$_SESSION['login_state']){die();}

$_SESSION['login_state'] = FALSE;

echo json_encode("logged out");

session_destroy();
