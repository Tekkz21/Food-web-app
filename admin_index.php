<?php
session_start();
require ("connect.php");
print_r($_SESSION['User']);
?>