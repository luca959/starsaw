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
if (isset($_COOKIE['products'])) {
    $pieces = explode("!", $_COOKIE['products']);
    $count = 0;
    foreach ($pieces as $prod) {
        $elem = explode("|", $prod);
        $select_query = "SELECT * FROM items WHERE nome = '" . $elem[0] . "'";
        $res = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($res)) {
            echo '
        <div class="productEval">
                <p class="productEvalName" id = "product_' . $count . '" name="productName">' . $row['nome'] . '</p>  quantità acquistata:
                <p class="productEvalName" id = "quantity_' . $count . '" >' . $elem[1] . '</p>
                <img class="productEvalImage" src="' . $row['immagine'] . '" alt="' . $row['nome'] . '">

                <div class="star">
                    <input type="range" id = "productEval_' . $count . '" min="1" max="5" value="1">
                    <div class="submit" onclick="addEval(' . $count . ')">Invia</div>
                </div>
        </div>';
            $count++;
        }
    }
}
?>
<div class='submit' onclick='index()'>Torna alla Homepage</div>
</div>

<?php
include "footer.php";
?>

