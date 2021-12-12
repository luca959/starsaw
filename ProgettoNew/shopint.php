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

$select_query = "SELECT * FROM items WHERE esposizione = '0'";
$res = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($res)) {
    echo '
         <div>
         <div class="product">
               <img class="productImage" src="' . $row['immagine'] . '" alt="' . $row['nome'] . '">
               <p class="productDescription"><strong>' . $row['nome'] . '</strong> <br>' . $row['descrizione'] . ' </p>
         </div>
         <p class="prezzo">Prezzo:' . $row['prezzo'] . ',Quantità:</p><input type="number" class="number_items" name="quantita" id="quantita1" min="0" value="0">
         <div class="button1" onclick="add_cart()">
            <p style="text-align: center;" >Aggiungi al Carello</p>
         </div>
      </div>';
}
?>
</div>
<?php
include "footer.php";
?>
</body>
</html>
