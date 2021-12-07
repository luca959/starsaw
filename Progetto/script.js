var password = document.registrazione.pass.value;
var confirm = document.registrazione.confirm.value;


function controllo() {
    if ((password.length < 6)) {
        document.getElementById("control").innerHTML="La password non può essere minore di 6 caratteri";
        document.registrazione.pass.focus();
        return false;
    }

    if ((password!=confirm)) {
        document.getElementById("control").innerHTML="Le password non coincidono";
        document.registrazione.pass.focus();
        return false;
    }
    else {
        document.registrazione.action = "registrationProcess.php";
        document.registrazione.submit();
    }
}

function int(){
    window.location="shopint.php";
}
function est(){
    window.location="shopest.php";
}
function guid(){
    window.location="guida.php";
}

















