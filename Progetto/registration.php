<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Registrazione</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="myscript.js"></script>
</head>

<body>

    <?php
    include 'menu.php'
    ?>

<div class="mydiv"> 
   <div> 
    <form id="myform" action="registrationProcess.php" method="POST"> 

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" class="" id="" name="nome" placeholder="Nome"><br>

    <i class="fa fa-user" style="font-size:13px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="text" class="" id="" name="cognome" placeholder="Cognome"><br>

    <i class="fa fa-envelope" style="font-size:9px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="email" id="" class=""  name="email" placeholder="E-mail"><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class="" id="" name="password" placeholder="Password"><br>

    <i class="fa fa-unlock-alt" style="font-size:14px;color:rgba(65, 65, 65, 1.0)"></i>
    <input type="password" class=""  id="" name="conferma" placeholder="Conferma password"><br>

    <input type="invia" value="Invia">

   </form>
  </div>

</div>

<?php
    include 'footer.php'
?>
</body>
</html>

