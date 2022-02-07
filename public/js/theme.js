"use strict"

console.log("Themememe..");

const html = document.querySelector("html");
const theme = localStorage.getItem("theme");

if (theme == null) {
    html.setAttribute("class", "light-theme light");
} else {
    html.setAttribute("class", theme);
}

const ham = document.querySelector(".hamburger-menu");
const apps = document.querySelector(".apps");
const logo = document.querySelector(".home");
const icon = document.querySelector("link[rel='icon']");

if(html.classList.contains("dark")) {
    darkLogos();
}
if(html.classList.contains("spooky-theme")) {
    changeLogoSpooky();
}
if(html.classList.contains("cute-theme")) {
    changeLogoCute();
}
if(html.classList.contains("panda-theme")) {
    changeLogoPanda();
}

//For hamburger menu and apps icon while changing theme
function lightLogos() {
    ham.children[0].setAttribute("src", "../../public/img/hamburger.png");
    apps.children[0].setAttribute("src", "../../public/img/9dots.png");
}
function darkLogos() {
    ham.children[0].setAttribute("src", "../../public/img/hamburger-dark.png");
    apps.children[0].setAttribute("src", "../../public/img/9dots-dark.png");
}

//For changing Logo and icon on tab 
function changeLogoCute() {
    logo.children[0].setAttribute("src", "../../public/img/cute/cute-logo.png");
    icon.setAttribute("href", "../../public/img/cute/cute-logo.png");
}
function changeLogoPanda() {
    logo.children[0].setAttribute("src", "../../public/img/panda/panda-logo.png");
    icon.setAttribute("href", "../../public/img/panda/panda-logo.png");
}
function changeLogoSpooky() {
    logo.children[0].setAttribute("src", "../../public/img/spooky/dark-spooky-logo.png");
    icon.setAttribute("href", "../../public/img/spooky/dark-spooky-logo.png");
}
function changeLogoNormal() {
    logo.children[0].setAttribute("src", "../../public/img/logoContacts.png");
    icon.setAttribute("href", "../../public/img/logoContacts.png");
}

document.addEventListener("click", (event) => {
    // console.log(event.target);
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
        changeLogoNormal();
        localStorage.setItem("theme", "light-theme light");
    }
    else if(event.target.matches(".dark-theme")) {
        html.setAttribute("class", "dark-theme dark");
        darkLogos();
        changeLogoNormal();
        localStorage.setItem("theme", "dark-theme dark");
    }
    else if(event.target.matches(".panda-theme")) {
        html.setAttribute("class", "panda-theme light");
        lightLogos();
        changeLogoPanda();
        localStorage.setItem("theme", "panda-theme light");
    }
    else if(event.target.matches(".spooky-theme")) {
        html.setAttribute("class", "spooky-theme dark");
        darkLogos();
        changeLogoSpooky();
        localStorage.setItem("theme", "spooky-theme dark");
    }
    else if(event.target.matches(".cute-theme")) {
        html.setAttribute("class", "cute-theme light");
        lightLogos();
        changeLogoCute();
        localStorage.setItem("theme", "cute-theme light");
    }
})

