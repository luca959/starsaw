<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo '
<nav>
  <div id="logo">
      <a href="index.php"><img src="img/home/logo.jpg" alt="logo"></a>
  </div>
  <div id="searchbar" class="buttons">
    <form class="modulo-ricerca">
        <input id="search" type="text" placeholder="Cerca per..." required>
        <input id="submit" type="submit" value="CERCA">
    </form>
   </div>
  <div class="buttons">
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
