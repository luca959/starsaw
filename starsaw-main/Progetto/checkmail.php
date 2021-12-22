<?php
include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php'; //Mi connetto al DB
$email = $_POST["email"];
$select_query = "SELECT * FROM utenti WHERE email='" . $email . "'"; //query per vedere se c'è già un utente con quella mail
$res = mysqli_query($con, $select_query); //eseguo a query per vedere se c'è già un utente con quella mail
if (mysqli_num_rows($res) == 0 ) { //se non c'è lo aggiungo (eseguendo la quesry di inserimento)
    echo "ok";
    mysqli_close($con);

} else {
    echo "ko";
    mysqli_close($con);

}

?>