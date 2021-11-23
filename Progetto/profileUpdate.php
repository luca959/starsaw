<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Profilo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<?php
if ($_POST['firstname'] == "" || $_POST['lastname'] == "" || $_POST['email'] == "") {
    die("<h1>I campi da aggiornare non possono essere vuoti</h1>");
}
;
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';
$update_query = "UPDATE utenti SET firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', email='" . $_POST['email'] . "'WHERE email='" . $_SESSION['email'] . "'";
$res = mysqli_query($con, $update_query); //eseguo la query

if ($res == 1) { //se l'update è andato a buon fine res =1 altrimenti è diverso da 1
    echo "<h1> Cambiamenti effettuati</h1>";
    $_SESSION['email'] = $_POST['email'];
} else {
    echo "<h1> Impossibile effettuare i cambiamenti </h1>";
}
?>

</body>
</html>
