const data = [
    ["./photos/art-8655200_1280.jpg", "Ozdobna rzeźba"],
    ["./photos/bird-9078403_1280.jpg", "Ptak na plaży"],
    ["./photos/japan-9074037_1280.jpg", "Japonia"],
    ["./photos/lightning-8970716_1280.jpg", "Piorun podczas burzy"],
    ["./photos/mountains-7957191_1280.jpg", "Góra w Alpach"],
    ["./photos/ural-owl-8418249_1280.jpg", "Dzika natura"],
    ["./photos/vietnam-9069634_1280.png", "Gdzieś w Wietnamie"],
    ["./photos/watzmann-9024268_1280.jpg", "Wieś w wąwozie"]
]
const autoscrollInterval = 3000;
let currentIndex = 0;
let isOnAutoscroll = true;

function readPhoto(index) {
    currentIndex = index;
    if (currentIndex === -1) currentIndex = data.length - 1;
    const photoIndex = currentIndex % data.length;
    document.getElementById("photo").setAttribute("src", data[photoIndex][0])
    document.getElementById("photoTitle").innerText = data[photoIndex][1];
}

function autoscroll(index) {
    if (!isOnAutoscroll) return;
    readPhoto(index);
    setTimeout(autoscroll, autoscrollInterval, index + 1);
}

function toggleAutoscroll() {
    const toggleButton = document.getElementById("autoscrollButton");
    isOnAutoscroll = !isOnAutoscroll;
    if (isOnAutoscroll) {
        autoscroll(currentIndex);
        toggleButton.setAttribute("value", "Wyłącz automatyczne przewijanie");
        return;
    }
    toggleButton.setAttribute("value", "Włącz automatyczne przewijanie");

}