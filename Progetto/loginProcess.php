<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

<?php
	session_start();

  if(empty($_POST['pass']))
    die('<h1>Il campo "Password" è vuoto!</h1>');
  if(empty($_POST['email']))
    die('<h1>Il campo "Email" è vuoto!</h1>');
	
	include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';  
	
	$email=trim($_POST["email"]);
	$pass=trim($_POST["pass"]);
	$email = mysqli_real_escape_string($mysqli,$email);

	$select_query = "SELECT * FROM utenti WHERE email='".$email."'";      //query per vedere se c'è già un utente con quella mail
    
	$result = mysqli_query($con, $select_query);
    
	$res=mysqli_fetch_assoc($result);     //eseguo la query per vedere se c'è già un utente con quella mail
	
	if(password_verify($pass, $res["pass"])){
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
