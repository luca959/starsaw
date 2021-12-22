<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Profilo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
</head>


<body>

<?php
include 'menu.php';

if (!isset($_SESSION['email'])) {
    die("<h1 class = 'center' > Non puoi accedere! </h1>");
}
/*----------------------------INIZIO AD INTERAGIRE CON IL DB----------------------------*/
include $_SERVER['DOCUMENT_ROOT'] . '/../private/connection.php';

$select_query = "SELECT * FROM utenti WHERE email='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $select_query);

$res = mysqli_fetch_assoc($result);

$firstname = $res['firstname']; //prendo i valori dal risultato della query
$lastname = $res['lastname'];
$email = $res['email'];
?>
<div class='mydiv'>
   <div>
        <h1 class = 'center'>Profilo</h1>
        <h2 class="center"> Nome:</h2>
        <p class="center"><?php echo $firstname ?></p>
        <h2 class="center"> Cognome:</h2>
        <p class="center"><?php echo $lastname ?></p>
        <h2 class="center">Email:</h2>
        <p class="center"><?php echo $email ?></p>
        <div id='updateButtons'>
            <div class='submit'><a href="update_profile.php" class="no_decoration">Modifica Profilo</a></div>
         </div>
    </div>
</div>
<?php
//mysqli_free_result($res);
mysqli_close($con);

include 'footer.php';

?>

</body>
</html>
