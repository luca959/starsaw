<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonshop: Ricerca</title>
    <link rel="icon" type="image/x-icon" href="/Progetto/img/home/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php
include "menu.php";
include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';
echo '<div class="mydiv">';
//$products = $_GET['products'];
$pieces = explode("!", $_GET['products']);
foreach ($pieces as $prod) {
    $elem = explode("|", $prod);
    $select_query = "SELECT * FROM items WHERE nome = '" . $elem[0] . "'";
    $res = mysqli_query($con, $select_query);
    include "products.php";
}
echo '</div>';
include "footer.php"
?>
</body>
