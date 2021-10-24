// variables
const menu = document.getElementById('links_container');
const menuButton = document.getElementById('menu_caller');

function toLeft () {
    menu.classList.toggle('show');
    menuButton.classList.toggle('show');
}

menuButton.onclick = toLeft;



