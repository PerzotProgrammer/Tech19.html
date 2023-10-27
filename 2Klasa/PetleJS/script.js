function For() {
    let end = document.getElementById("pFor").value;
    let liczby = document.getElementById("liczby");
    liczby.innerHTML = "";
    document.getElementById("title").style.display = "block";

    for (let i = 1; i <= end; i++) liczby.append(i + " ");
}

function Pow() {
    let num = document.getElementById("num").value;
    let pow = document.getElementById("pow").value;
    let liczby = document.getElementById("liczby");
    liczby.innerHTML = "";
    let pot = num;

    for (let i = 0; i < pow - 1; i++) num *= pot;
    
    liczby.append(num);
}