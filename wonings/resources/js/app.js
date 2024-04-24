import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// const dialog = document.querySelector("dialog");
// const showButton = document.querySelector("dialog + button");
// const closeButton = document.querySelector("dialog button");

// // "Show the dialog" button opens the dialog modally
// showButton.addEventListener("click", () => {
//   dialog.showModal();
// });

// // "Close" button closes the dialog
// closeButton.addEventListener("click", () => {
//   dialog.close();
// });


// Get dialog elements
const woningDialog = document.getElementById("woningDialog");
const woningTypeDialog = document.getElementById("woningTypeDialog");
const bouwTypeDialog = document.getElementById("bouwTypeDialog");


// Get buttons to show dialogs
const showWoningButton = document.getElementById("showWoningDialog");
const showWoningTypeButton = document.getElementById("showWoningTypeDialog");
const showBouwTypeDialog = document.getElementById("showBouwTypeDialog");

// Add event listeners to buttons
showWoningButton.addEventListener("click", () => {
    woningDialog.showModal();
});

showWoningTypeButton.addEventListener("click", () => {
    woningTypeDialog.showModal();
});

// Add event listeners to close buttons within dialogs
woningDialog.querySelector("button").addEventListener("click", () => {
    woningDialog.close();
});

woningTypeDialog.querySelector("button").addEventListener("click", () => {
    woningTypeDialog.close();
});

showBouwTypeDialog.querySelector("button").addEventListener("click", () => {
    woningDialog.close();
});

showBouwTypeDialog.querySelector("button").addEventListener("click", () => {
    bouwTypeDialog.close();
});



