<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Ordine Effettuato</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>

</head>


<body>

<?php
include "menu.php";
if (!isset($_SESSION['email'])) {
    echo "<h1 class='center'> Per poter proseguire all'acquisto devi prima effettuare l'accesso</h1>";

} else {
    echo "<h1 class='center'> Ordine effettuato, sarà  spedito il prima possibile. <br>
    Vorresti lasciare una recensione ai prodotti che hai acquistato?</h1>
    <div class='mydiv'>
    <div class='submit' onclick='valutazione()' >Si</div>
    <div class='submit' onclick='index()'>No</div>
    </div>";

}
include "footer.php";
?>

