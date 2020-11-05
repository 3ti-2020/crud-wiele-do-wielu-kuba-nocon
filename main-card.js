const element = document.querySelector(".bird-img");

const cardB = document.querySelector(".cardB");
const btn_close = document.querySelector(".zamknij");
const btn_open = document.querySelector(".btn");

btn_open.addEventListener('click', function(){
    cardB.style.display = "grid";
    cardB.style.animation = "scale-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both";
});
btn_close.addEventListener('click', function(){   
    cardB.style.animation = "scale-out-bottom 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both";
    cardB.style.display = "none";
});

setInterval(() => {
    element.style.setProperty("--ml", Math.random() * 200 + "px");
}, 300)

const text = 'Flappy Bird!';
const header = document.querySelector(".head-card");
let index = 0;

function writeText() {
    header.innerText = text.slice(0, index);

    index++;

    if (index > text.length) {
        index = 0;
    }
}

setInterval(writeText, 200);