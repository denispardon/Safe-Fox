const button = document.querySelector(".nav__link_pa");
const dropDown = document.querySelector(".drop__down");

button.addEventListener("click", (e) => {
    e.stopPropagation();
    dropDown.classList.toggle("drop__down__active");
} );
document.addEventListener("click", (e) => {
    if(e.target === dropDown){
        return
    };
    dropDown.classList.remove("drop__down__active");
});