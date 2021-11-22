<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
    <title>Sign-up</title>
</head>

<body>

<?php


    $fname=trim($_POST["firstname"]);
    $lname=trim($_POST["lastname"]);
    $email=trim($_POST["email"]);
    $pass=trim($_POST["pass"]);
    $confirm=trim($_POST["confirm"]);
    if (empty($_POST['firstname'])||empty($_POST['lastname'])||empty($_POST['pass']) ||empty($_POST['confirm']) || empty($_POST['email'])) {//controllo se il campo è vuoto 
        die('<h1>Campi Mancanti!</h1>');
    }
    elseif($pass!=$confirm)   {
        die('<h1>Campi Sbagliati</h1>');
    }
    else{
        include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';  
        $fname = mysqli_real_escape_string($mysqli,$fname);
        $lname = mysqli_real_escape_string($mysqli,$lname);
        $email = mysqli_real_escape_string($mysqli,$email);
        $pass = mysqli_real_escape_string($mysqli,$pass);
        $confirm = mysqli_real_escape_string($mysqli,$confirm);
    
        $pass=password_hash($pass, PASSWORD_DEFAULT);
        $sql="INSERT INTO utenti (firstname,lastname,email,pass) VALUES ('$fname', '$lname', '$email','$pass')";
        $res = mysqli_query($con,$sql);
        echo "<h3>Account inserito con successo</h3>";
        mysqli_free_result($res);
        mysqli_close($con);
        header("Refresh:2; url=login.php");


    }

    ?>

</body>
</html>
