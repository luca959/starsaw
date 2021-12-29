/* FUNZIONI CHECK SUI FORM */

check_mail=false;
function update_check(){
    if(check_mail==false){
        document.getElementById("myform").addEventListener("submit", function(event){
            event.preventDefault();
        });
    }
    else{
        document.getElementById("myform").submit();
    }
}
function pwd_check_update(){
    var password = document.getElementById("pass").value;
    var confirm = document.getElementById("confirm").value;
    if(password.length>=6 && password==confirm){
        document.getElementById("control").innerHTML="";
        document.getElementById("myform").submit();
    }
    else if(password.length<6){
        document.getElementById("control").innerHTML="La password non può essere minore di 6 caratteri";
        document.getElementById("myform").addEventListener("submit", function(event){
            event.preventDefault();
          });
    }
    else{
        document.getElementById("control").innerHTML="Le password non corrispondono";
        document.getElementById("myform").addEventListener("submit", function(event){
            event.preventDefault();
          });
    }
}
function pwd_check(){
    var password = document.getElementById("pass").value;
    var confirm = document.getElementById("confirm").value;
    if(password.length>=6 && password==confirm){
        document.getElementById("control").innerHTML="";
    }
    else if(password.length<6){
        document.getElementById("control").innerHTML="La password non può essere minore di 6 caratteri";
        document.getElementById("myform").addEventListener("submit", function(event){
            event.preventDefault();
          });
    }
    else{
        document.getElementById("control").innerHTML="Le password non corrispondono";
        document.getElementById("myform").addEventListener("submit", function(event){
            event.preventDefault();
          });
    }
}

function controllo() {
    var password = document.getElementById("pass").value;
    var confirm = document.getElementById("confirm").value;
    if (password.length <= 6) {
        document.getElementById("control").innerHTML="La password non può essere minore di 6 caratteri";
        document.getElementById("myform").addEventListener("submit", function(event){
            event.preventDefault();
          });
    }
    else if(password != confirm){
        document.getElementById("control").innerHTML="La password non corrispondono";
        document.getElementById("myform").addEventListener("submit", function(event){
            event.preventDefault();
          });
    }
    else if(check_mail==false){
        pwd_check();
        document.getElementById("myform").addEventListener("submit", function(event){
            event.preventDefault();
          });
    }
    else {
        document.getElementById("control").innerHTML="";
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


//API Fetch su registrazione e login
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

// API Fetch su update profilo
function verificaupdate(url){
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
        if(result==="ko" && filename==="update_profile.php"){
            document.getElementById("emailControl").innerHTML="La seguente mail è già associata ad un'altro account";
            check_mail=false;
            
        }
        else{
            document.getElementById("emailControl").innerHTML="";
            check_mail=true;
        }
       
        });
}
/* FUNZIONI CHECK SUI FORM */

/* FUNZIONI LINK */
function int(){
    window.location="shopint.php";
}
function est(){
    window.location="shopest.php";
}
function guid(){
    window.location="guida.php";
}

function cart(){
    window.location="cart.php?products="+localStorage.getItem('products');
}
function valutazione(){
    window.location="valutation.php?products="+localStorage.getItem('products');
}
function index(){
    window.location="index.php";
}

/* FUNZIONI LINK */



/* FUNZIONI CART */

function addToCart(id){
    var name = document.getElementById("product_"+id).innerHTML;
    var quantity = document.getElementById("quantity_"+id).value;
    var data = name+"|"+quantity+"!";
    var old = localStorage.getItem("products");
    if(old === null) {
        old = "";
    }
    localStorage.setItem("products",  merge(old, name, quantity)); 
}

function merge(old, data, quantity){        //cancello le ripetizione nel carrello di un prodotto
    str = old.indexOf(data);
    if(str==-1){
        return(old + data+"|"+quantity+"!");
    }       //guardo se nel carrello è già presente quel prodotto
    str+=data.length+1;     
    var temp = old[str];        // guardo la sua quantità
    old = old.replace(data+"|"+temp, data+"|"+(parseInt(temp)+parseInt(quantity)));     // aggiorno la quantità
    return old;
}

function RemoveToCart(id){
    var name = document.getElementById("product_"+id).innerHTML;
    var quantity = document.getElementById("quantity_"+id).innerHTML;
    var old = localStorage.getItem("products");
    old=old.replace(name+"|"+parseInt(quantity)+"!", "")
    localStorage.setItem("products",  old);
    cart(); 
}
/*
function clearCar(url){
    price=document.getElementById("total_price").innerHTML;
        fetch(url, {
        method: "post",
        headers: { "Content-type": "application/x-www-form-urlencoded" },
        }).then(function (response) {
            if(response.status != 200){
                console.log("problem: "+response.status);
                return false;
            }
            //get the text from the response
            return response.text();

        }).then(function (result) {
    
        if(result==="ko" ){
            document.getElementById("control").innerHTML="Utente non autenticato";
            document.getElementById("myform").addEventListener("submit", function(event){
                event.preventDefault();
            });
            
        }
        else{
            document.getElementById("control").innerHTML="";

        }
       
        });
    }
*/
/* FUNZIONI CART */







