<?php
require 'connect.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: connexion.php");

?>