"use strict"

console.log("Workin..");
// const row = document.getElementsByClassName("row");

document.addEventListener("click", (event) => {
    console.log(event.target);
    if (event.target.matches(".row")) {
        console.log("Its a row");
    }
    if (event.target.matches(".favourite")) {
        console.log("Its a favourite button");
    }
})