function controllo() {
    var password = document.registrazione.pass.value;
    var confirm= document.getElementById("confirm").value;

     mail=document.getElementById("emailcontrol").innerHTML;
    if (password.length < 6 || confirm.lenght <6) {
        document.getElementById("control").innerHTML="La password non può essere minore di 6 caratteri";
        document.registrazione.pass.focus();
        return false;
    }
    else if( password.length >6 && confirm.lengt>6 ){
        document.getElementById("control").innerHTML="";

    }
    else if(password != confirm){
        document.getElementById("control").innerHTML="La password non corrispondono";
        document.registrazione.pass.focus();
        return false;
    }
    else if(mail!=""){
        document.getElementById("emailcontrol").innerHTML="La seguente mail è già associata ad un'altro account";
        document.getElementById("emailcontrol").focus();
        return false;

    }
    else {
        document.getElementById("control").innerHTML="";
        document.registrazione.action = "registrationProcess.php";
        document.registrazione.submit();
    }
}

function verifica(url){
    email=encodeURI(document.getElementById("email").value);
    fetch(url, {
        method: "post",
        headers: { "Content-type": "application/x-www-form-urlencoded" },
        body: "email=" +email,
        }).then(function (response) {
         /* code for response */
         if(response.status != 200){
             console.log("problem: "+response.status);
             return;
         }
         //get the text from the response
         return response.text();

        }).then(function (result) {
         /* code for result */
         if(result=="ko"){
            document.getElementById("emailcontrol").innerHTML="La seguente mail è già associata ad un'altro account";
         }
         else{
            document.getElementById("emailcontrol").innerHTML="";
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

















