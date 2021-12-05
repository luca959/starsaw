<!DOCTYPE html>
<html lang = "en">
<head>
    <script type="text/javascript" src="script.js"></script>
    <title>Registrazione</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php
include 'menu.php'
?>

<div class="mydiv">
   <div>
    <h1 class = "center">Registrati</h1>
    <form id="myform" method="POST" name="registrazione">

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" class="inputHover" name="firstname" placeholder="Nome" required><br>

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" class="inputHover" name="lastname" placeholder="Cognome" required><br>

    <i class="fa fa-envelope" style="font-size:9px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="email" class="inputHover"  name="email" placeholder="E-mail" required><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="inputHover" name="pass" placeholder="Password" required><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="inputHover"  name="confirm" placeholder="Conferma password" required><br>
    <p id="control" style="color:red"></p>

    <input type="submit" value="Invia" onClick="controllo()">

   </form>
  </div>

</div>

<?php
include 'footer.php'
?>
</body>
</html>

