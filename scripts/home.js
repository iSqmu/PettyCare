const next = document.querySelector(".next");
const prev = document.querySelector(".prev");
let carrousel = document.querySelector(".carrousel");
let imgnumber = document.querySelector(".nmbr");

let i = 0;

next.addEventListener("click", () => {
    i++;
    if(i > 3) {
        i = 0;
        carrousel.style.transform = `translateX(0%)`;
    }
    imgnumber.innerHTML = `${i+1}`
    console.log(i)
    carrousel.style.transform = `translateX(${-i * 100}%)`;
})

prev.addEventListener("click", () => {
    i--;
    if(i < 0){
        i = 3;
        carrousel.style.transform = `translateX(-300%)`;
    }
    imgnumber.innerHTML = `${i+1}`
    console.log(i)
    carrousel.style.transform = `translateX(${-i * 100}%)`;
})

//! BTN animation projects