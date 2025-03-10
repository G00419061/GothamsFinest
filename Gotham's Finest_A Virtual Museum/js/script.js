let items = document.querySelectorAll('.suit_slideshow .item'); // Fix selector
let next = document.getElementById('next');
let previous = document.getElementById('previous');

let active = 0;

function loadShow() {
    let stt = 0;

    // Right-side elements (after active)
    for (let i = active + 1; i < items.length; i++) {
        stt++;
        items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(500px) rotateY(-3deg)`;
        items[i].style.zIndex = items.length - stt;
        items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
        items[i].style.transition = 'transform 0.5s ease, opacity 0.5s ease, filter 0.5s ease';
    }

    stt = 0;

    // Left-side elements (before active)
    for (let i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(500px) rotateY(3deg)`;
        items[i].style.zIndex = items.length - stt;
        items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
        items[i].style.transition = 'transform 0.5s ease, opacity 0.5s ease, filter 0.5s ease';
    }

    // Active item stays in the center
    items[active].style.transform = "translateX(0) scale(1) perspective(500px) rotateY(0)";
    items[active].style.zIndex = items.length;
    items[active].style.filter = "blur(0)";
    items[active].style.opacity = 1;
    items[active].style.transition = 'transform 0.5s ease, opacity 0.5s ease, filter 0.5s ease';
}

// Add event listeners for buttons
next.addEventListener("click", function () {
    if (active < items.length - 1) {
        active++;
        loadShow();
    }
});

previous.addEventListener("click", function () {
    if (active > 0) {
        active--;
        loadShow();
    }
});

// Load initial state
loadShow();

document.querySelectorAll('.item').forEach(item =>{
    item.addEventListener('click', () => {
        item.querySelector('.card-flip').classList.toggle('flipped')
    });
});
