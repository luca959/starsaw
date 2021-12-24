<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Ordine Effettuato</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

<?php
include "menu.php";
echo "<h1 class='center'> Ordine effettuato, sarà spedito il prima possibile</h1>";
header("Refresh:2; url=index.php");

include "footer.php";
?>

</body>
</html>
