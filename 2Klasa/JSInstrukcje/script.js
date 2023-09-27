function WalidujDane(){
    var login = document.getElementById("login").value;
    var password = document.getElementById("password").value;
    var loginEnc = Szyfr(login);
    var passwordEnc = Szyfr(password);

    if (loginEnc == sessionStorage.getItem("login") && passwordEnc == sessionStorage.getItem("password")){
        location.href = "stronaBoga.html";
    }
    else{
        alert("Zły login lub hasło!");
    }
}

function DodajDane(){
    var login = document.getElementById("login").value;
    var password = document.getElementById("password").value;
    
    sessionStorage.setItem("login", Szyfr(login));
    sessionStorage.setItem("password", Szyfr(password));
}

function Szyfr(szyfr){
    var szyfrEnc = "";

    for (var i = 0; i < szyfr.length; i++){
        szyfrEnc += szyfr.charCodeAt(i);
    }

    return szyfrEnc;
}