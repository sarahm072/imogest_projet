let images1 = ["./image/maisson/home1-1.jpg', './image/maisson/home1-2.jpg"];
let images2 = ["./image/maisson/home2-1.jpg', './image/maisson/home2-2.jpg"];


let currentIndex = 0;

function openModal1() {
    document.getElementById("photoModal").style.display = "flex";
    document.getElementById("modalImage").src = images1[currentIndex];
}

function openModal2() {
    document.getElementById("photoModal").style.display = "flex";
    document.getElementById("modalImage").src = images1[currentIndex];
}
function closeModal() {
    document.getElementById("photoModal").style.display = "none";
}

function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    document.getElementById("modalImage").src = images[currentIndex];
}

function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    document.getElementById("modalImage").src = images[currentIndex];
}
