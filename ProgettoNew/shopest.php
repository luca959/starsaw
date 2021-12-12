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
          <img class="productImage" src="img/esterno/sageretia.png" alt="Sageretia Theezans">
          <p class="productDescription"><strong>Sageretia Theezans</strong> <br>
          La Sageretia è una pianta sempreverde tropicale,originaria della Cina </p>
     </div>
     <p class="prezzo">Prezzo: 10$   ,    Quantità:</p><input type="number" class="number_items" name="quantita" id="quantita1" min="0" value="0">
     <div class="button1" onclick="add_cart()">
        <p style="text-align: center;" >Aggiungi al Carello</p>
     </div>

    </div>

  <div>
      <div class="product">
          <img class="productImage" src="img/esterno/carmona.png" alt="Carmona">
          <p class="productDescription"><strong>Carmona</strong> <br>
          La carmona è un sempreverde tropicale, detta albero del tè</p>
      </div>
      <p class="prezzo">Prezzo: 15$   ,    Quantità:</p><input type="number"class="number_items" name="quantita" id="quantita2" min="0" value="0">
      <div class="button1">
        <p style="text-align: center;" >Aggiungi al Carello</p>
     </div>
  </div>

  <div>
      <div class="product">
      <img class="productImage" src="img/esterno/frassino.png" alt="Frassino">
          <p class="productDescription"><strong>Frassino</strong> <br>
          Il Frassino è un bonsai dall'aspetto elegante e delicato</p>
      </div>
      <p class="prezzo">Prezzo: 20$   ,    Quantità:</p><input type="number" class="number_items" name="quantita" id="quantita3" min="0" value="0">
      <div class="button1">
        <p style="text-align: center;" >Aggiungi al Carello</p>
     </div>
</div>


<div>
      <div class="product">
        <img class="productImage" src="img/esterno/melograno.png" alt="Melograno">
           <p class="productDescription"><strong>Melograno</strong> <br>
           Originario del Mediterraneo e dell'Asia,scelta popolare nel Bonsai. </p>
      </div>
      <p class="prezzo">Prezzo: 25$   ,    Quantità:</p><input type="number"class="number_items" name="quantita" id="quantita4" min="0" value="0">
      <div class="button1">
        <p style="text-align: center;" >Aggiungi al Carello</p>
     </div>
</div>

<div>
      <div class="product">
        <img class="productImage" src="img/esterno/acero.png" alt="Acero Giapponese">
           <p class="productDescription"><strong>Acero Giapponese</strong> <br>
           L'acero giapponese è un bonsai da esterno tollera temperature al di sotto di 0°C.</p>
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
