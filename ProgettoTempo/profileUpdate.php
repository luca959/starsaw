<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Profilo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<?php
include "menu.php";

include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';

if ($_POST['firstname'] == "" || $_POST['lastname'] == "" || $_POST['email'] == "") {
    die("<h1>I campi da aggiornare non possono essere vuoti</h1>");
}

$fname = mysqli_real_escape_string($con, trim($_POST["firstname"]));
$lname = mysqli_real_escape_string($con, trim($_POST["lastname"]));
$email = mysqli_real_escape_string($con, trim($_POST["email"]));

$update_query = "UPDATE utenti SET firstname='" . $fname . "', lastname='" . $lname . "', email='" . $email . "'WHERE email='" . $_SESSION['email'] . "'";

$res = mysqli_query($con, $update_query); //eseguo la query

if ($res == 1) { //se l'update è andato a buon fine res=1 altrimenti è diverso da 1
    echo "<h1 class='center'> Cambiamenti effettuati</h1>";
    $_SESSION['email'] = $_POST['email'];
    header("Refresh:2; url=index.php");
} else {
    echo "<h1 class='center'> Impossibile effettuare i cambiamenti </h1>";
    header("Refresh:2; url=update_profile.php");
}
include "footer.php";
?>
