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
    <script src="script.js"></script>
</head>

<body>
<?php
include "menu.php";
?>
 <div class="mydiv">
<?php
if (empty($_GET['ricerca'])) { //controllo se il campo è vuoto
    echo "<h1 class ='center'>Il campo di Ricerca è vuoto!</h1>";
    header("Refresh:2; url=index.php");

} else {
    include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';

    $search = mysqli_real_escape_string($con, trim($_GET["ricerca"])); //sanity check
    $select_query = "SELECT * FROM items WHERE nome LIKE '%" . $search . "%'";
    $res = mysqli_query($con, $select_query);
    include "products.php";
}
mysqli_close($con);

?>
</div>



<?php

include "footer.php";
?>
