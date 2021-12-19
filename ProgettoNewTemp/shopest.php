<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonshop: Bonsai da Interno</title>
    <link rel="icon" type="image/x-icon" href="/Progetto/img/home/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
<div class="mydiv">
<?php
include "menu.php";

include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';

$select_query = "SELECT * FROM items WHERE esposizione = '1'";
$res = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($res)) {
    echo '
        <div>
        <div class="product">
        <form  method="GET" onsubmit="return save()">
                <img class="productImage" src="' . $row['immagine'] . '" alt="' . $row['nome'] . '">
                <input class="productName" type="text" readonly value="' . $row['nome'] . '" name="productName"> ' . $row['nome'] . ' <br>' . $row['descrizione'] . '
            </div>
            <p class="prezzo">Prezzo:' . $row['prezzo'] . '</p>

            Quantità: <input type="number" class="number_items" name="productQuantity" min="0" value="0">
            <input type="submit" class="button1" value="Aggiungi al carrello">
        </form>


        </div>';
}
?>
</div>
<?php
include "footer.php";
?>
</body>
</html>
