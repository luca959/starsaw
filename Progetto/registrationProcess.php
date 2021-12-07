<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonshop: Registrazione</title>
    <link rel="icon" type="image/x-icon" href="/Progetto/img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

<?php
include "menu.php";
include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php'; //Mi connetto al DB
include "inputChecks.php";
$insert_query = "INSERT INTO utenti (firstname,lastname,email,pass) VALUES ('$fname', '$lname', '$email','$pass')"; // query per inserire un nuovo utente
$select_query = "SELECT * FROM utenti WHERE email='" . $email . "'"; //query per vedere se c'è già un utente con quella mail

$res = mysqli_query($con, $select_query); //eseguo la query per vedere se c'è già un utente con quella mail

if (mysqli_num_rows($res) == 0) { //se non c'è lo aggiungo (eseguendo la quesry di inserimento)
    $res = mysqli_query($con, $insert_query);
    echo "<h1 class='center' >Benvenuto nel club " . $fname . " </h1>";
} else {
    echo "<h1 class='center' > E' già presente un utente con questa mail</h1>"; 
    header("Refresh:2; url=registration.php");
//altrimenti segnalo l'errore
}

mysqli_close($con); //chiudo la connessione
header("Refresh:2; url=login.php");
include "footer.php";

?>

</body>
</html>
