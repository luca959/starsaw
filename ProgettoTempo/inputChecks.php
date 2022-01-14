<?php

if (empty($_POST['firstname'])) { //controllo se il campo è vuoto
    die("<h1 class = 'center'>Il campo \"Nome\" è vuoto!</h1>");
}

if (empty($_POST['lastname'])) {
    die("<h1 class = 'center'>Il campo \"Cognome\" è vuoto!</h1>");
}

if (empty($_POST['pass'])) {
    die("<h1 class = 'center'>Il campo \"Password\" è vuoto!</h1>");
}

if (empty($_POST['confirm'])) {
    die("<h1 class = 'center'>Il campo \"Conferma Password\" è vuoto!</h1>");
}

if (empty($_POST['email'])) {
    die("<h1 class = 'center'>Il campo \"Email\" è vuoto!</h1>");
}

$fname = mysqli_real_escape_string($con, trim($_POST["firstname"]));
$lname = mysqli_real_escape_string($con, trim($_POST["lastname"]));
$email = mysqli_real_escape_string($con, trim($_POST["email"]));
$pass = trim($_POST["pass"]);
$confirm = trim($_POST["confirm"]);

if ($pass != $confirm) {
    die("<h1 class = 'center'>Le password non coincidono</h1>");
}

$pass = password_hash($pass, PASSWORD_DEFAULT);
?>