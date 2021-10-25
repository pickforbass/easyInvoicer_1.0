// Variables
const menu = document.getElementById('menu');
const menuButton = document.getElementById('menu_caller');

// Side menu animation

function toLeft () {
    menu.classList.toggle('show');
    menuButton.classList.toggle('show');
}

menuButton.onclick = toLeft;



