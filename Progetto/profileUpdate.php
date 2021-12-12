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

if ($_POST['pass'] == "") {
    $update_query = "UPDATE utenti SET firstname='" . $fname . "', lastname='" . $lname . "', email='" . $email . "'WHERE email='" . $_SESSION['email'] . "'";
} else {
    $pass = trim($_POST["pass"]);
    $confirm = trim($_POST["confirm"]);
    if ($pass != $confirm) {
        die("<h1 class = 'center'>Le password non coincidono</h1>");
    }
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $update_query = "UPDATE utenti SET firstname='" . $fname . "', lastname='" . $lname . "', email='" . $email . "', pass='" . $pass . "'WHERE email='" . $_SESSION['email'] . "'";
}
$res = mysqli_query($con, $update_query); //eseguo la query

if ($res == 1) { //se l'update è andato a buon fine res =1 altrimenti è diverso da 1
    echo "<h1 class='center'> Cambiamenti effettuati</h1>";
    $_SESSION['email'] = $_POST['email'];
    header("Refresh:3; url=index.php");
} else {
    echo "<h1 class='center'> Impossibile effettuare i cambiamenti </h1>";
    header("Refresh:3; url=index.php");
}
mysqli_close($con);
include "footer.php";
?>

</body>
</html>
