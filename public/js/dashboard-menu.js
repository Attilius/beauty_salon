'use strict';

const sidebarMenu = document.getElementById('sidebarMenu');
const sidebarMenuItem = sidebarMenu.children[0].children[0].children;

window.onload = function() {
    const index = localStorage.getItem("menu_index");
    console.log(index)
}

for (let i = 0; i < sidebarMenuItem.length; i++) {
    const item = sidebarMenuItem[i];
    const setActive = item => {
            [...item.target.parentElement.parentElement.children]
            .forEach(sib => sib.children[0].classList.remove('active'));
        if (item.target.nodeName === 'A') {
            localStorage.setItem('menu_index', i);
            item.target.classList.add('active');
        }
        else {
            [...item.target.parentElement.parentElement.parentElement.children]
                .forEach(sib => sib.children[0].classList.remove('active'));
            localStorage.setItem('menu_index', i);
            item.path[1].parentElement.children[0].classList.add('active');
        }
    }
    item.addEventListener('click', setActive);
}