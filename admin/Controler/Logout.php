<?php
/**
 * Logout Controler
 */

session_unset();
$_SESSION = array();
session_destroy();

header('Location:./index.php');

?>