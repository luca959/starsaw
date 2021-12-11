<!DOCTYPE html>
<html lang = "it">
<head>
   <script type="text/javascript" src="script.js"></script>
    <title>Accedi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   <?php
include 'menu.php'
?>

<div class="mydiv">
   <div>
      <h1 class = "center">Accedi</h1>
    <form id="myform" method="POST" onsubmit="return loginCheck()">

    <i class="fa fa-envelope" style="font-size:9px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="email" class="inputHover" name="email" id="email" onchange="verifica('checkmail.php')" placeholder="E-mail" required><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="inputHover" id="pass" name="pass" placeholder="Password" required><br>
   <p id="emailControl" style="color:red"></p>
    <input type="submit" value="Invia">

   </form>
  </div>

</div>

<?php
include 'footer.php'
?>
</body>
</html>

