<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<?php
include "menu.php";

//session_start();

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

    echo '<div class="mydiv">
                <div>
                    <h1 class = "h1"> Benvenuto ' . $res['firstname'] . '</h1>
                </div>
        </div>';
    header("Refresh:3; url=index.php");

} else {
    echo '<div class="mydiv">
            <div>
                <h1 class = "h1"> Utente o password errati </h1>
            </div>
        </div>';

    header("Refresh:3; url=index.php");

}
?>

<?php
include "footer.php";

?>
</body>
</html>
