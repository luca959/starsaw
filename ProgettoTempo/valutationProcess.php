<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonshop: Carrello</title>
    <link rel="icon" type="image/x-icon" href="/Progetto/img/home/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<?php
include "menu.php";
include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';
if (isset($_COOKIE['toEval'])) {
    $pieces = $_COOKIE['toEval'];
    $elem = explode("|", $pieces);
    $insert_query = "INSERT INTO valutazioni (prodotto,voto) VALUES ('$elem[0]', '$elem[1]')"; // query per inserire un nuovo voto
    $res = mysqli_query($con, $insert_query);
    echo "<h1 class = 'center'> Grazie per il feedback </h1>";
    setcookie("toEval", "", time() - 3600);
    if (isset($_COOKIE['products'])) {
        header("Refresh:2; url=valutation.php");
    } else {
        header("Refresh:2; url=index.php");
    }

}
?>
<?php
include "footer.php";
?>

