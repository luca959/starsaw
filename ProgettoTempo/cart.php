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
echo '<div class="mydiv">';
//$products = $_GET['products'];
$pieces = explode("!", $_GET['products']);
$prezzoTot = 0;
foreach ($pieces as $prod) {
    $elem = explode("|", $prod);
    $select_query = "SELECT * FROM items WHERE nome = '" . $elem[0] . "'";
    $res = mysqli_query($con, $select_query);
    $count = 0;
    while ($row = mysqli_fetch_assoc($res)) {
        echo '
        <div>
            <div class="product">
                <img class="productImage" src="' . $row['immagine'] . '" alt="' . $row['nome'] . '">
                <p class="productName" id = "product_' . $count . '" name="productName">' . $row['nome'] . '</p>
                <p class="productDescription">' . $row['descrizione'] . '</p>
            </div>
            <p class="center">Prezzo: ' . $row['prezzo'] . '$, Quantità:</p> <p class="center" id = "quantity_' . $count . '" > ' . $elem[1] . ' </p>

            <div class="button1" onclick="RemoveToCart(' . $count . ')">
                <p class="center"  >Rimuovi dal Carello</p>
            </div>
        </div>';
        $count++;
        $prezzoTot += $elem[1] * $row['prezzo'];
    }

}
?>
</div>
<?php
    echo '<h1 class="center" >Il prezzo totale è:<span id="total_price">' . $prezzoTot . '</span> $ </h1>'
    ?>
        <form class="center" method="GET" action="order.php" id="myform">
            <input type="submit" class="submit" value="Procedi all' ordine" >
            <p id="control" style="color:red"></p>
        </form>';
<?php
include "footer.php"
?>
</body>
