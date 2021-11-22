<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonshop: Home</title>
    <link rel="icon" type="image/x-icon" href="/Progetto/img/favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
include "menu.php";
?>

    <div class="mydiv">

        <img id="image" src="img/home.jpg" alt="">

        <div id="descrizione">
            <h1>Benvenuti su Bonshop</h1>
            <p>I Bonsai sono piccoli alberi in vaso, originari della Cina.<br>
                Risalgono a centinaia di anni fa e sono famosi per le loro dimensioni ridotte.<br>
                I Bonsai possono essere realizzati con numerose specie arboree e svilupparsi seguendo diversi stili.
                <br>
                Richiedono cura quotidiana ma non troppa manutenzione.
            </p>

        </div>

        <div class="menu">
            <div id="interno">
                <h1>Bonsai da interno</h1>
            </div>
            <div id="esterno">
                <h1>Bonsai da esterno</h1>
            </div>
            <div id="guida">
                <h1>Guida</h1>
            </div>
        </div>




    </div>

<?php
include "footer.php";

?>
</body>
</html>
