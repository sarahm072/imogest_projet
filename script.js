let images1 = ["./image/maisson/home1-1.jpg", "./image/maisson/home1-2.jpg"];
let images2 = ["./image/maisson/home2-1.jpg", "./image/maisson/home2-2.jpg"];

let currentImages = [];
let currentIndex = 0;

function openModal1() {
    currentImages = images1;
    currentIndex = 0;
    document.getElementById("photoModal").style.display = "flex";
    document.getElementById("modalImage").src = currentImages[currentIndex];
}

function openModal2() {
    currentImages = images2;
    currentIndex = 0;
    document.getElementById("photoModal").style.display = "flex";
    document.getElementById("modalImage").src = currentImages[currentIndex];
}

function closeModal() {
    document.getElementById("photoModal").style.display = "none";
}

function nextImage() {
    currentIndex = (currentIndex + 1) % currentImages.length;
    document.getElementById("modalImage").src = currentImages[currentIndex];
}

function prevImage() {
    currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
    document.getElementById("modalImage").src = currentImages[currentIndex];
}
