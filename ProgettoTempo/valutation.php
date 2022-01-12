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
        <div class="productEval">
                <p class="productEvalName" id = "product_' . $count . '" name="productName">' . $row['nome'] . ' </p>
                 <img class="productEvalImage" src="' . $row['immagine'] . '" alt="' . $row['nome'] . '">
                 <div class="star">
                    <input type="range" min="1" max="5" value="1">
                </div>

        </div>';
        $count++;
        $prezzoTot += $elem[1] * $row['prezzo'];
    }

}

echo '</div>';

include "footer.php";
?>
</body>
