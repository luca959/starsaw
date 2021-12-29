<?php
if (!isset($_SESSION['email'])) {
    echo "ko"; //utente non autenticato sul sito
}
else{
    echo "ok";//utente autenticato
}
    ?>