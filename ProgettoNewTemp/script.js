check_mail=false;

function pwd_check(){
    var password = document.getElementById("pass").value;
    var confirm = document.getElementById("confirm").value;
    if(password.length>=6 && password==confirm){
        document.getElementById("control").innerHTML="";
    }
    else if(password.length<6){
        document.getElementById("control").innerHTML="La password non può essere minore di 6 caratteri";
    }
    else{
        document.getElementById("control").innerHTML="Le password non corrispondono";
    }
}

function controllo() {
    var password = document.getElementById("pass").value;
    var confirm = document.getElementById("confirm").value;
    if (password.length <= 6) {
        document.getElementById("control").innerHTML="La password non può essere minore di 6 caratteri";
        return false;
    }
    else if(password != confirm){
        document.getElementById("control").innerHTML="La password non corrispondono";
        return false;
    }
    else if(!check_mail){
        pwd_check();
        return false;

    }
    else {
        document.getElementById("control").innerHTML="";
        document.getElementById("myform").action = "registrationProcess.php";
        document.getElementById("myform").submit();
    }
}

function loginCheck(){
    errorValue = document.getElementById("emailControl").innerHTML;
    var email = document.getElementById("email").value;
    if(errorValue!=""){
        //document.getElementById("emailControlRegister").innerHTML="La seguente mail è già associata ad un'altro account";
        document.getElementById("emailControl").focus();
        return false;

    }
    else {
        document.getElementById("emailControl").innerHTML="";
        document.getElementById("myform").action = "loginProcess.php";
        document.getElementById("myform").submit();
    }
}

function verifica(url){
    var filename = window.location.href.replace(/^.*[\\\/]/, '');       //vado a vedere il nome del file nel url così posso gestire in modo diverso la presenza della mail in fase di login o registrazione
   
    email=encodeURI(document.getElementById("email").value);
    fetch(url, {
        method: "post",
        headers: { "Content-type": "application/x-www-form-urlencoded" },
        body: "email=" +email,
        }).then(function (response) {
            if(response.status != 200){
                console.log("problem: "+response.status);
                return false;
            }
            //get the text from the response
            return response.text();

        }).then(function (result) {
         /* code for result */
        if(result==="ko" && filename==="registration.php"){
            document.getElementById("emailControl").innerHTML="La seguente mail è già associata ad un'altro account";
            check_mail=false;
        }
        else if (result==="ok" && filename==="login.php"){
                document.getElementById("emailControl").innerHTML="La seguente mail non è associata a nessun account";
         }
         else{
                 document.getElementById("emailControl").innerHTML="";
                 check_mail=true;
         }
        });
}


/*--------- ADD CART ---------- */

function addToCart(elem){
    alert(document.getElementById("productName"));
}

/*--------- ADD CART ---------- */
function int(){
    window.location="shopint.php";
}
function est(){
    window.location="shopest.php";
}
function guid(){
    window.location="guida.php";
}
function pass(){
    window.location="passwordUpdate.php";
}
















