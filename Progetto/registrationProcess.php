<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
    <title>Sign-up</title>
</head>

<body>

<?php
$filename = $_SERVER['DOCUMENT_ROOT'] . "/../private/mydata.txt"; // vado a creare il database al di fuori della doc root
$database = fopen($filename, "a"); //con a apro il file in append mode

    if (empty($_POST['firstname'])) //controllo se il campo è vuoto 
        die('<h1>Il campo "Firstname" è vuoto!</h1>');


    if (empty($_POST['lastname'])) {
        die('<h1>Il campo "Lastname" è vuoto!</h1>');
    }

    if (empty($_POST['pass'])) {
        die('<h1>Il campo "Password" è vuoto!</h1>');
    }

    if (empty($_POST['confirm'])) {
        die('<h1>Il campo "Confirm" Password è vuoto!</h1>');
    }

    if (empty($_POST['email'])) {
        die('<h1>Il campo "Email" è vuoto!</h1>');
    }
    
    include 'connection.php';             // mi connetto al database
    //include 'allusers.php'; 
    $dati[0] = mysqli_real_escape_string($con, $_POST['firstname']); //$dati[0] contiene il nome
    $dati[1] = mysqli_real_escape_string($con, $_POST['lastname']); //$dati[1] contiene il cognome
    $dati[2] = $_POST['pass']; //$dati[2] contiene la password
    $dati[3] = $_POST['confirm']; //$dati[3] contiene la conferma della password
    $dati[4] = mysqli_real_escape_string($con, $_POST['email']); //$dati[4] contiene la mail
    
    if ($dati[2] != $dati[3]) {
         die("<h1>Le password non corrispondono</h1>");
    }

    /*-----------------------------------------------------------------INIZIO INTERAZIONE COL DATABASE-----------------------------------------------------------------*/
    
    $dati[2]=password_hash($dati[2], PASSWORD_DEFAULT);      //cripto la password
    
    $insert_query = "INSERT INTO utenti (id, firstname, lastname, email, pass) 
                    VALUES (NULL, '".$dati[0]."', '".$dati[1]."', '".$dati[4]."', '".$dati[2]."');";        //query per aggiungere l'utente al db
    
    $select_query = "SELECT * FROM utenti WHERE email='".$dati[4]."'";      //query per vedere se c'è già un utente con quella mail
    
    $res=mysqli_query($con, $select_query);     //eseguo la query per vedere se c'è già un utente con quella mail
    
    if(mysqli_num_rows($res)==0){       //se non c'è lo aggiungo (eseguendo la quesry di inserimento)
        echo "<h1>Benvenuto nel club ".$dati[0]." </h1>";
        $res=mysqli_query($con, $insert_query);
    }
    else{
        die ("<h1> E' già presente un utente con questa mail</h1>");       //altrimenti segnalo l'errore
    }

    /*-----------------------------------------------------------------FINE INTERAZIONE COL DATABASE-----------------------------------------------------------------*/

    ?>

</body>
</html>
