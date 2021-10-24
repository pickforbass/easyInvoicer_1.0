// Variables
const menu = document.getElementById('links_container');
const menuButton = document.getElementById('menu_caller');


// Side menu animation

function toLeft () {
    menu.classList.toggle('show');
    menuButton.classList.toggle('show');
}

menuButton.onclick = toLeft;



