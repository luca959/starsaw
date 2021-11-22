<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

<?php
session_start();

if (empty($_POST['pass'])) {
    die('<h1>Il campo "Password" è vuoto!</h1>');
}

if (empty($_POST['email'])) {
    die('<h1>Il campo "Email" è vuoto!</h1>');
}

include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';

$email = mysqli_real_escape_string($con, trim($_POST["email"]));
$pass = trim($_POST["pass"]);

$select_query = "SELECT * FROM utenti WHERE email='" . $email . "'"; //query per vedere se c'è già un utente con quella mail

$result = mysqli_query($con, $select_query);

$res = mysqli_fetch_assoc($result); //eseguo la query per vedere se c'è già un utente con quella mail

if (password_verify($pass, $res["pass"])) {
    $_SESSION['email'] = $res['email']; //salvo nelle variabili di sessione i valori che mi potrebbero servire in futuro per evitare di rifare una query al DB
    $_SESSION['firstname'] = $res['firstname'];
    $_SESSION['id'] = session_id();

    die("<h1> Benvenuto " . $res['firstname'] . "</h1>");
}

die("<h1> Utente o Password errati </h1>") //altrimenti restituisco un errore
?>

</body>
</html>
