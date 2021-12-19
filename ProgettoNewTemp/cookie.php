<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Aggiunto al carrello</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<?php
$name = $_GET['productName'];
$quantity = $_GET['productQuantity'];
$product = array($name => $quantity);
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = $product;
} else {
    $_SESSION['cart'] += $product;
}
echo ($product);
?>


</body>
</html>
