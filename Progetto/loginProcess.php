<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

<?php
	session_start();

	$filename=$_SERVER['DOCUMENT_ROOT']."/../private/mydata.txt";		// vado a creare il database al di fuori della doc root
	$database = fopen($filename, "r");		//con r apro il file in read mode

  if(empty($_POST['pass']))
    die('<h1>Il campo "Password" è vuoto!</h1>');
  if(empty($_POST['email']))
    die('<h1>Il campo "Email" è vuoto!</h1>');
	
	include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';  
	
	$dati[0]=$_POST['pass'];		//$dati[0] contiene la password
	$dati[1]=$_POST['email'];		//$dati[1] contiene la mail

	$select_query = "SELECT * FROM utenti WHERE email='".$dati[1]."'";      //query per vedere se c'è già un utente con quella mail
    
	$result = mysqli_query($con, $select_query);
    
	$res=mysqli_fetch_assoc($result);     //eseguo la query per vedere se c'è già un utente con quella mail
	
	if(password_verify($dati[0], $res["pass"])){
		echo "<h1> Benvenuto ".$res['firstname']."</h1>";
		$_SESSION['firstname']=$res['firstname'];
		$_SESSION['lastname']=$res['lastname'];
		$_SESSION['id']=session_id();
		exit();
	}
  
  die("<h1> Utente o Password errati </h1>")			//altrimenti restituisco un errore
?>

</body>
</html>
