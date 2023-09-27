function WalidujDane(){
    var login = document.getElementById("login").value;
    var password = document.getElementById("password").value;
    if (login == "baranekbozy123" && password == "papiezpolak2137"){
        location.href = "stronaBoga.html";
    }
    else{
        alert("Zły login lub hasło!");
    }
}