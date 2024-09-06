function MakeRect() {
    let canvas = document.getElementById("canvas");
    let wRect = document.getElementById("wRect").value;
    let hRect = document.getElementById("hRect").value;
    let xRect = document.getElementById("xRect").value;
    let yRect = document.getElementById("yRect").value;
    let fRect = document.getElementById("fRect").value;
    let randRect = document.getElementById("randRect").value;
    let rand = "";
    if (randRect) rand = RandomTransform();

    let shape = `<rect width="${wRect}" height="${hRect}" x="${xRect}" y="${yRect}" fill="${fRect}" ${rand}>`;
    canvas.innerHTML += shape;
}

function MakeCirc() {
    let canvas = document.getElementById("canvas");
    let rCirc = document.getElementById("rCirc").value;
    let xCirc = document.getElementById("xCirc").value;
    let yCirc = document.getElementById("yCirc").value;
    let fCirc = document.getElementById("fCirc").value;
    let randCirc = document.getElementById("randCirc").value;
    let rand = "";
    if (randCirc) rand = RandomTransform();

    let shape = `<circle r="${rCirc}" cx="${xCirc}" cy="${yCirc}" fill="${fCirc}" ${rand}>`;
    canvas.innerHTML += shape;
}

function RandomTransform() {
    return `transform="rotate(${RandomNumber(0, 359)}), skewX(${RandomNumber(0, 359)}), skewY(${RandomNumber(0, 359)})"`;
}

function RandomNumber(min, max) {
    return Math.floor(Math.random() * max) + min;
}