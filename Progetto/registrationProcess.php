<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
    <title>Sign-up</title>
</head>

<body>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php'; //Mi connetto al DB

if (empty($_POST['firstname'])) { //controllo se il campo è vuoto
    die('<h1>Il campo "Nome" è vuoto!</h1>');
}

if (empty($_POST['lastname'])) {
    die('<h1>Il campo "Cognome" è vuoto!</h1>');
}

if (empty($_POST['pass'])) {
    die('<h1>Il campo "Password" è vuoto!</h1>');
}

if (empty($_POST['confirm'])) {
    die('<h1>Il campo "Conferma Password" è vuoto!</h1>');
}

if (empty($_POST['email'])) {
    die('<h1>Il campo "Email" è vuoto!</h1>');
}

$fname = mysqli_real_escape_string($con, trim($_POST["firstname"]));
$lname = mysqli_real_escape_string($con, trim($_POST["lastname"]));
$email = mysqli_real_escape_string($con, trim($_POST["email"]));
$pass = trim($_POST["pass"]);
$confirm = trim($_POST["confirm"]);

if ($pass != $confirm) {
    die('<h1>Le password non coincidono</h1>');
}

$pass = password_hash($pass, PASSWORD_DEFAULT);
$insert_query = "INSERT INTO utenti (firstname,lastname,email,pass) VALUES ('$fname', '$lname', '$email','$pass')"; // query per inserire un nuovo utente
$select_query = "SELECT * FROM utenti WHERE email='" . $email . "'"; //query per vedere se c'è già un utente con quella mail

$res = mysqli_query($con, $select_query); //eseguo la query per vedere se c'è già un utente con quella mail

if (mysqli_num_rows($res) == 0) { //se non c'è lo aggiungo (eseguendo la quesry di inserimento)
    $res = mysqli_query($con, $insert_query);
    echo '<h1>Benvenuto nel club ' . $fname . ' </h1>';
} else {
    die('<h1> E\' già presente un utente con questa mail</h1>'); //altrimenti segnalo l'errore
}

//mysqli_free_result($res);
mysqli_close($con); //chiudo la connessione
header("Refresh:2; url=login.php");
?>

</body>
</html>
