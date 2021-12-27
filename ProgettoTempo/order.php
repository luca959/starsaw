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
    echo "<h1 class='center'> Per Poter Effettuare il seguente acquisto , bisogna autenticarsi sul sito</h1>";
  
}
else{
    echo "<h1 class='center'> Ordine effettuato, sarà spedito il prima possibile</h1>";
    header("Refresh:2; url=index.php");
}
include "footer.php";
?>

</body>
</html>
