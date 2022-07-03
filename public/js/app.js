



// NavBar 

window.addEventListener("scroll", function(){
    var header = this.document.querySelector("header");
    header.classList.toggle("down",this.window.scrollY>0);
})

// CARTA PROYECTS
const carta = document.querySelector(".carta-Descrip");
const carta2 = document.querySelector(".carta-Descrip2");
const carta3 = document.querySelector(".carta-Descrip3");
const openCartBtn = document.querySelector(".cart-open");
const openCartBtn2 = document.querySelector(".cart-open2");
const openCartBtn3 = document.querySelector(".cart-open3");

function toggleCart(){
    carta.classList.toggle("hover");
}

function toggleCart2(){
    carta2.classList.toggle("hover");
}

function toggleCart3(){
    carta3.classList.toggle("hover");
}

openCartBtn.addEventListener("click", toggleCart);
openCartBtn2.addEventListener("click", toggleCart2);
openCartBtn3.addEventListener("click", toggleCart3);


// MENU DE NAVBAR EN CELULAR 
// que cierre y que habrá
const menu = document.querySelector(".nav-menu");
const openMenuBtn = document.querySelector(".nav-open");
const closeMenuBtn = document.querySelector(".nav-close");

function toggleMenu(){
    menu.classList.toggle("menu_opened");
}

openMenuBtn.addEventListener("click", toggleMenu);
closeMenuBtn.addEventListener("click", toggleMenu);

//---QUE SE CIERRE CUANDO HAGAS CLICK EN MOVILE---
//---Y QUE SE MUESTRE EN EL NAV BAR EN EL QUE ESTAN---

const menuLinks = document.querySelectorAll('.nav-menu a[href^="#"]');

const observer = new IntersectionObserver((entries)=>{
    entries.forEach(entry =>{
        const id = entry.target.getAttribute("id");
        const menuLink = document.querySelector(`.nav-menu a[href="#${id}"]`)

        if(entry.isIntersecting){
            document.querySelector(".nav-menu a.activate").classList.remove("activate")
            menuLink.classList.add("activate");
        }
    })
},{rootMargin: "-50% 0px -50% 0px"})

menuLinks.forEach(menuLink =>{
    menuLink.addEventListener("click", function(){
        menu.classList.remove("menu_opened");   
    });

    const hash = menuLink.getAttribute("href");
    const target = document.querySelector(hash);

    if(target){
        observer.observe(target);
    }
});
