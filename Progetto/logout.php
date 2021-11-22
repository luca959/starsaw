<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
    <title>Logout</title>
</head>

<body>

<?php
session_start();
unset($_SESSION['id']);
$_SESSION = array();
session_destroy();
setcookie(session_name(), '', time() - 42000);
header('Location: index.php');
exit;
?>

</body>
</html>