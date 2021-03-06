<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Modifica Profilo</title>
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
        <h1 class = 'center'>Modifica Profilo</h1>
        <form id='myform' action='profileUpdate.php' method='POST'>

            <i class='fa fa-user' style='font-size:13px;color:rgba(65, 65, 65, 1.0)'></i>
            <input type='text' class='no-outline' id='firstname' name='firstname' value='<?php echo $firstname ?>'  required><br>

            <i class='fa fa-user' style='font-size:13px;color:rgba(65, 65, 65, 1.0)'></i>
            <input type='text' class='no-outline' id='lastname' name='lastname' value='<?php echo $lastname ?>' required><br>

            <i class='fa fa-envelope' style='font-size:9px;color:rgba(65, 65, 65, 1.0)'></i>
            <input type='email' id='email' class='no-outline'  name='email' value='<?php echo $email ?>'  required><br>
            <p style=' color:red' id='emailControl'></p>
            <div id='updateButtons'>
                <div class='submit'><a href="passwordUpdate.php" class="no_decoration">Modifica Password</a></div>
                <input type='submit' class='submit' value='Applica'>
            </div>

        </form>
    </div>
</div>
<?php
//mysqli_free_result($res);
mysqli_close($con);

include 'footer.php';

?>
