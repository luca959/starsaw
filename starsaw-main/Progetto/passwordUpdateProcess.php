<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Modifica Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<?php
include "menu.php";

include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';

if ($_POST['pass'] != $_POST['confirm']) {
    die("<h1 class='center'>Le password non coincidono</h1>");
}

$pass = mysqli_real_escape_string($con, trim($_POST["pass"]));
$pass = password_hash($pass, PASSWORD_DEFAULT);

$update_query = "UPDATE utenti SET pass='" . $pass . "'WHERE email='" . $_SESSION['email'] . "'";

$res = mysqli_query($con, $update_query); //eseguo la query

if ($res == 1) { //se l'update è andato a buon fine res =1 altrimenti è diverso da 1
    echo "<h1 class='center'> Cambiamenti effettuati</h1>";
    header("Refresh:2; url=update_profile.php");
} else {
    echo "<h1 class='center'> Impossibile effettuare i cambiamenti </h1>";
    header("Refresh:2; url=update_profile.php");
}
include "footer.php";
?>

</body>
</html>
