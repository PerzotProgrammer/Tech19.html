function MakeRect() {
    let canvas = document.getElementById("canvas");
    let wRect = document.getElementById("wRect").value;
    let hRect = document.getElementById("hRect").value;
    let xRect = document.getElementById("xRect").value;
    let yRect = document.getElementById("yRect").value;
    let fRect = document.getElementById("fRect").value;
    let rotRect = document.getElementById("rotRect").value;

    let shape = `<rect class="object" width="${wRect}" height="${hRect}" x="${xRect}" y="${yRect}" fill="${fRect}" transform="rotate(${rotRect}, ${parseInt(xRect) + (parseInt(wRect) / 2)}, ${parseInt(yRect) + (parseInt(hRect) / 2)})  ">`;
    canvas.innerHTML += shape;
}

function MakeCirc() {
    let canvas = document.getElementById("canvas");
    let rCirc = document.getElementById("rCirc").value;
    let xCirc = document.getElementById("xCirc").value;
    let yCirc = document.getElementById("yCirc").value;
    let fCirc = document.getElementById("fCirc").value;

    let shape = `<circle class="object" r="${rCirc}" cx="${xCirc}" cy="${yCirc}" fill="${fCirc}">`;
    canvas.innerHTML += shape;
}

function MakePoly() {
    let canvas = document.getElementById("canvas");
    let pPoly = document.getElementById("pPoly").value;
    let fPoly = document.getElementById("fPoly").value;

    let shape = `<polygon class="object" points="${pPoly}" fill="${fPoly}">`;
    canvas.innerHTML += shape;
}