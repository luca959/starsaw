<?php
session_start();
if(!isset($_SESSION['id'])){
echo '
  <nav>
  <div id="logo">
      <img src="img/logo.jpg" alt="logo">
  </div>

  <div id="buttons">

      <a href="index.php">Home</a>
      <a href="#">Carrello</a>
      <a href="login.php">Accedi</a>
      <a href="registration.php">Registrati</a>
  </div>
</nav>
';
}
else {
  echo '
  <nav>
  <div id="logo">
      <img src="img/logo.jpg" alt="logo">
  </div>

  <div id="buttons">

      <a href="index.php">Home</a>
      <a href="#">Carrello</a>
      <a href="#">Profilo</a>
      <a href="#">Logout</a>
  </div>
</nav>
';
}