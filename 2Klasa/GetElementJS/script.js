function GetInfo() {
    let imie = document.getElementById("imie").value;
    let nazwisko = document.getElementById("nazwisko").value;
    document.getElementById("imieINazwiskoOut").innerText = imie + " " + nazwisko;
}

function PowerOf() {
    let number = document.getElementById("liczba").value;
    let exponent = document.getElementById("wykładnik").value;
    let output = Math.round(Math.pow(number, exponent) * 1000) / 1000;
    document.getElementById("liczbaOut").innerHTML = output.toString();
}

function RadioCheck() {
    let radios = document.getElementsByName("radio");
    let checked;
    let out;
    for (let i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            checked = parseInt(radios[i].value);
        }
    }
    switch (checked) {
        case 0:
            out = "Też lubię rodzynki!";
            break;
        case 1:
            out = "Ja wolę rodzynki!";
            break;
        case 2:
            out = "Nie przepadam, ale jest ok!";
            break;
        default:
            out = "wybierz jakąś opcje";
            break;
    }
    document.getElementById("radioOut").innerHTML = out;
}

function CheckboxCheck() {
    let checks = document.getElementsByName("checkbox");
    let order = "";
    let message;
    for (let i = 0; i < checks.length; i++) {
        if (checks[i].checked) {
            order += checks[i].value + "<br>";
        }
    }
    if (order === "") {
        message = "Nic nie wybrano!";
    } else {
        message = "Twoje zamówienie to: <br>" + order;
    }
    document.getElementById("checkboxOut").innerHTML = message;
}