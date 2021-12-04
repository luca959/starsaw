<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
    <title>Sign-up</title>
</head>

<body>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php'; //Mi connetto al DB
include "inputChecks.php";
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
