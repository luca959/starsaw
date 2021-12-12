<!DOCTYPE html>
<html lang = "it">
<head>
    <title>Bonshop: Password</title>
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

/*$select_query = "SELECT * FROM utenti WHERE email='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $select_query);

$res = mysqli_fetch_assoc($result);*/

echo "
<div class='mydiv'>
   <div>
        <h1 class = 'center'>Modifica Password</h1>
        <form id='myform' method='POST' action='passwordUpdateProcess'>

            <i class='fa fa-unlock-alt' style='font-size:14px;color:rgba(65, 65, 65, 1.0)'></i>
            <input type='password' class='no-outline' id='pass' name='pass' placeholder='Password' ><br>

            <i class='fa fa-unlock-alt' style='font-size:14px;color:rgba(65, 65, 65, 1.0)'></i>
            <input type='password' class='no-outline'  id='confirm' name='confirm' placeholder='Confirm password' ><br>
            <p id='control' style='color:red'></p>

            <input type='submit' class='submit' value='Submit'>

        </form>
    </div>
</div>"
;

//mysqli_free_result($res);
mysqli_close($con);

include 'footer.php';

?>

</body>
</html>
