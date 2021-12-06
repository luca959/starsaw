<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo '
<nav>
  <div id="logo">
      <a href="index.php"><img src="img/home/logo.jpg" alt="logo"></a>
  </div>

  <div id="buttons">
      <a href="index.php">Home</a>
      <a href="#">Carrello</a>
      <a href="login.php">Accedi</a>
      <a href="registration.php">Registrati</a>
  </div>
</nav>
';
} else {
    echo '
<nav>
  <div id="logo">
     <a href="index.php"><img src="img/home/logo.jpg" alt="logo"></a>
  </div>

  <div id="buttons">
      <a href="index.php">Home</a>
      <a href="#">Carrello</a>
      <a href="profile.php">Profilo</a>
      <a href="logout.php">Esci</a>
  </div>
</nav>
';
}
