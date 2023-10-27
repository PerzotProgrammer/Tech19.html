function Matematyka(){
    let x = document.getElementById("1pole").value;
    let y = document.getElementById("2pole").value;
    let z = document.getElementById("znak").value;
    switch (z){
        case '+':
            alert(parseFloat(x) + parseFloat(y));
            break;
        case '-':
            alert(parseFloat(x) - parseFloat(y));
            break;
        case '*':
            alert(parseFloat(x) * parseFloat(y));
            break;
        case '/':
            let checkX = parseFloat(x);
            let checkY = parseFloat(y);
            if (checkX == 0 || checkY == 0){
                alert("Nie można dzielić przez 0!");
                break;
            }
            alert(parseFloat(x) / parseFloat(y));
            break;
        default:
            alert("Niepoprawne wartości!");
            break;
    }
}

function CzyLiczba(){
    let x = document.getElementById("czyLiczba").value;
    if (x == "") x = "NaN";
    let wynik = isNaN(x)? "Nie jest to liczba": "Jest to liczba";
    alert(wynik);
}