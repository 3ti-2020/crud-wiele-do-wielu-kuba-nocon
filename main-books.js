const btnzamknij = document.querySelector(".zamknij");
const btnotworz = document.querySelector(".btn-wypozyczone");
const wypozyczaniediv = document.querySelector(".wypozyczanie");

btnzamknij.addEventListener('click', ()=>{
    wypozyczaniediv.style.display = "none";
})
btnotworz.addEventListener('click', ()=>{
    wypozyczaniediv.style.display = "flex";
})