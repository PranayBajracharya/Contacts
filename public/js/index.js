"use strict"

console.log("Workin..");
// const row = document.getElementsByClassName("row");
const html = document.querySelector("html");
const ham = document.querySelector(".hamburger-menu");
const apps = document.querySelector(".apps");

if(html.classList.contains("dark-theme")) {
    ham.children[0].setAttribute("src", "../../public/img/hamburger-dark.png");
    apps.children[0].setAttribute("src", "../../public/img/9dots-dark.png");
}

document.addEventListener("click", (event) => {
    console.log(event.target);
    if (event.target.matches(".row")) {
        console.log("Its a row");
    }
    if (event.target.matches(".favourite")) {
        console.log("Its a favourite button");
    }
    if (event.target.matches(".theme")) {
        if(html.classList.contains("dark-theme")) {
            html.classList.remove("dark-theme");
            html.classList.add("light-theme");
            ham.children[0].setAttribute("src", "../../public/img/hamburger.png");
            apps.children[0].setAttribute("src", "../../public/img/9dots.png");
        } else {
            html.classList.remove("light-theme");
            html.classList.add("dark-theme");
            apps.children[0].setAttribute("src", "../../public/img/9dots-dark.png");
            ham.children[0].setAttribute("src", "../../public/img/hamburger-dark.png");
        }
    }

})