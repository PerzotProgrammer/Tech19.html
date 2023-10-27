let list = "none";

function Show() {
    if (list === "none") {
        document.getElementById("list").style.display = "block";
        list = "block";
    } else {
        document.getElementById("list").style.display = "none";
        list = "none";
    }
    console.log(list);
}