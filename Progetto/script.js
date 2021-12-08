function controllo() {
    var password = document.getElementById("password").value;
    var confirm = document.getElementById("confirm").value;
    errorValue = document.getElementById("emailControl").innerHTML;

    if (password.length < 6) {
        document.getElementById("control").innerHTML="La password non può essere minore di 6 caratteri";
        document.registrazione.pass.focus();
        return false;
    }
    else if(password != confirm){
        document.getElementById("control").innerHTML="La password non corrispondono";
        document.registrazione.pass.focus();
        return false;
    }
    else if(errorValue!=""){
        //document.getElementById("emailControlRegister").innerHTML="La seguente mail è già associata ad un'altro account";
        document.getElementById("emailControl").focus();
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
        }
        else if (result==="ok" && filename==="login.php"){
                document.getElementById("emailControl").innerHTML="La seguente mail non è associata a nessun account";
         }
         else{
            if(filename==="registration.php")
                document.getElementById("emailControl").innerHTML="";
            else
                 document.getElementById("emailControl").innerHTML="";
         }
        });
}


/*--------- ADD CART ---------- */



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

















