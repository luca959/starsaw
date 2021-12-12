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
<?php
include "menu.php";
?>
 <div class="mydiv">


    <div>
      <div class="product">
          <img class="productImage" src="img/interno/ficus.png" alt="Bonsai di Ficus">
          <p class="productDescription"><strong>Ficus</strong> <br>
          Il genere Ficus appartiene alla famiglia delle piante di gelso. </p>
     </div>
     <p class="prezzo">Prezzo: 10$   ,    Quantità:</p><input type="number" class="number_items" name="quantita" id="quantita1" min="0" value="0">
     <div class="button1" onclick="add_cart()">
        <p style="text-align: center;" >Aggiungi al Carello</p>
     </div>

    </div>

  <div>
      <div class="product">
          <img class="productImage" src="img/interno/sageretia.png" alt="Bonsai di Sageretia">
          <p class="productDescription"><strong>Sageretia</strong> <br>
          La Sageretia è una pianta sempreverde tropicale, originaria della Cina. </p>
      </div>
      <p class="prezzo">Prezzo: 15$   ,    Quantità:</p><input type="number"class="number_items" name="quantita" id="quantita2" min="0" value="0">
      <div class="button1">
        <p style="text-align: center;" >Aggiungi al Carello</p>
     </div>
  </div>

  <div>
      <div class="product">
      <img class="productImage" src="img/interno/piangente.png" alt="Fico Piangente">
          <p class="productDescription"><strong>Ficus Piangente</strong> <br>
         Il Ficus Piangente è la pianta piu' venduta al mondo, originaria dell'India. </p>
      </div>
      <p class="prezzo">Prezzo: 20$   ,    Quantità:</p><input type="number" class="number_items" name="quantita" id="quantita3" min="0" value="0">
      <div class="button1">
        <p style="text-align: center;" >Aggiungi al Carello</p>
     </div>
</div>


<div>
      <div class="product">
        <img class="productImage" src="img/interno/pino.png" alt="Pino Nero">
           <p class="productDescription"><strong>Pino Nero</strong> <br>
           Il pino nero è un albero appartenente alla famiglia delle Pinaceae. </p>
      </div>
      <p class="prezzo">Prezzo: 25$   ,    Quantità:</p><input type="number"class="number_items" name="quantita" id="quantita4" min="0" value="0">
      <div class="button1">
        <p style="text-align: center;" >Aggiungi al Carello</p>
     </div>
</div>

<div>
      <div class="product">
        <img class="productImage" src="img/interno/pinon2.png" alt="Pino">
           <p class="productDescription"><strong>Pino</strong> <br>
           I pini sono conifere resinose con aghi in ciuffi da due a cinque aghi.</p>
      </div>
      <p class="prezzo">Prezzo: 30$   ,    Quantità:</p> <input type="number" class="number_items" name="quantita" id="quantita5" min="0" value="0">
      <div class="button1">
        <p style="text-align: center;" >Aggiungi al Carello</p>
     </div>
</div>



  </div>
<?php
include "footer.php";
?>
</body>
</html>
