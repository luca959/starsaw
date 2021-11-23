<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Accedi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   <?php
include 'menu.php';
?>
<div>
<h1>Grazie per aver visitato Bonshop</h1>
</div>
<?php

include 'footer.php';
unset($_SESSION['id']);
$_SESSION = array();
session_destroy();
//setcookie(session_name(), '', time() - 42000);

//header("Refresh:5; url=index.php");

?>
</body>
</html>