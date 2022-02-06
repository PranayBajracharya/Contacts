"use strict"

console.log("Themememe..");

// const html = document.querySelector("html");
const ham = document.querySelector(".hamburger-menu");
const apps = document.querySelector(".apps");
const logo = document.querySelector(".home");

if(html.classList.contains("dark")) {
    ham.children[0].setAttribute("src", "../../public/img/hamburger-dark.png");
    apps.children[0].setAttribute("src", "../../public/img/9dots-dark.png");
}
if(html.classList.contains("spooky-theme")) {
    logo.children[0].setAttribute("src", "../../public/img/spooky/dark-spooky-logo.png")
}
if(html.classList.contains("cute-theme")) {
    logo.children[0].setAttribute("src", "../../public/img/cute/cute-logo.png")
}
if(html.classList.contains("panda-theme")) {
    logo.children[0].setAttribute("src", "../../public/img/panda/panda-logo.png")
}

document.addEventListener("click", (event) => {
    console.log(event.target);
    if (event.target.matches(".row")) {
        console.log("Its a row");
    }
    if (event.target.matches(".favourite")) {
        console.log("Its a favourite button");
    }

    //Theme changes
    if(event.target.matches(".light-theme")) {
        html.setAttribute("class", "light-theme light");
        lightLogos();
        logo.children[0].setAttribute("src", "../../public/img/logoContacts.png");
        localStorage.setItem("theme", "light-theme light");
    }
    else if(event.target.matches(".dark-theme")) {
        html.setAttribute("class", "dark-theme dark");
        darkLogos();
        logo.children[0].setAttribute("src", "../../public/img/logoContacts.png");
        localStorage.setItem("theme", "dark-theme dark");
    }
    else if(event.target.matches(".panda-theme")) {
        html.setAttribute("class", "panda-theme light");
        lightLogos();
        logo.children[0].setAttribute("src", "../../public/img/panda/panda-logo.png");
        localStorage.setItem("theme", "panda-theme light");
    }
    else if(event.target.matches(".spooky-theme")) {
        html.setAttribute("class", "spooky-theme dark");
        darkLogos();
        logo.children[0].setAttribute("src", "../../public/img/spooky/dark-spooky-logo.png");
        localStorage.setItem("theme", "spooky-theme dark");
    }
    else if(event.target.matches(".cute-theme")) {
        html.setAttribute("class", "cute-theme light");
        lightLogos();
        logo.children[0].setAttribute("src", "../../public/img/cute/cute-logo.png");
        localStorage.setItem("theme", "cute-theme light");
    }

})

function lightLogos() {
    ham.children[0].setAttribute("src", "../../public/img/hamburger.png");
    apps.children[0].setAttribute("src", "../../public/img/9dots.png");
}
function darkLogos() {
    ham.children[0].setAttribute("src", "../../public/img/hamburger-dark.png");
    apps.children[0].setAttribute("src", "../../public/img/9dots-dark.png");
}