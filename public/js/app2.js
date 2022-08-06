const sidemenu = document.querySelector(".sidemenu");
const openBtn = document.querySelector(".icon");

function toggleSide(){
    sidemenu.classList.toggle("close");
}

openBtn.addEventListener("click", toggleSide);