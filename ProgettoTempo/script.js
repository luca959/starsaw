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
    window.location="cart.php";
}
function valutazione(){
    window.location="valutation.php";
}
function index(){
    clearCart();
    window.location="index.php";
}

/* FUNZIONI LINK */


/* FUNZIONI CART */

function addToCart(id){
    var name = document.getElementById("product_"+id).innerHTML;
    var quantity = document.getElementById("quantity_"+id).value;
    document.cookie = "products="+merge(name, quantity)+"";
    //localStorage.setItem("products",  merge(name, quantity)); 
}

function merge(name, quantity){        //cancello le ripetizione nel carrello di un prodotto
    var old = getCookie("products");
    //var old = localStorage.getItem("products");
    if(old === null) return(name+"|"+quantity+"!");
    var temp = old.split("!");
    var newStr="";
    var trovato=false;
    temp.forEach(prod=>{
        if(prod=="") return;        //se il punto esclamativo è l'ultimo prod è vuoto quindi lo salto
        if(prod.split("|")[0]==name){
            trovato=true;       //se nella local storage c'è già quell'elemento
            var newQuantity=parseInt(prod.split("|")[1])+parseInt(quantity);        //sommo alla sua quantità la quantità nuova
            newStr+=name+"|"+newQuantity;
        }
        else{
            newStr+=prod;       //sennò riscrivo quello che c'era
        }
        newStr+="!";
    })
    if(!trovato) newStr+=name+"|"+quantity+"!";     //se invece quell'elemento non c'era lo aggiungo con la relativa quantità
    return newStr;
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function RemoveToCart(id){
    var name = document.getElementById("product_"+id).innerHTML;
    var quantity = document.getElementById("quantity_"+id).innerHTML;
    var old = getCookie("products");
    old=old.replace(name+"|"+parseInt(quantity)+"!", "")
    //localStorage.setItem("products",  old);
    document.cookie = "products="+old+"";
}

function addEval(id){
    var name = document.getElementById("product_"+id).innerHTML;
    var evaluation = document.getElementById("productEval_"+id).value;
    //window.location="valutationProcess.php?products="+name+"|"+evaluation;
    RemoveToCart(id);
    valutazione();
}

function clearCart(){
    //localStorage.clear();
    document.cookie = "products="+getCookie("products")+"; expires=Thu, 18 Dec 2021 12:00:00 UTC";
    }

/* FUNZIONI CART */







