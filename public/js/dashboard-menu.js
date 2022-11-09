'use strict';

const sidebarMenu = document.getElementById('sidebarMenu');
const sidebarMenuItem = sidebarMenu.children[0].children[0].children;

for (let i = 0; i < sidebarMenuItem.length; i++) {
    const item = sidebarMenuItem[i];
    const setActive = item => {
        [...item.target.parentElement.parentElement.children]
            .forEach(sib => sib.children[0].classList.remove('active'));
        if (item.target.nodeName === 'A') item.target.classList.add('active');
        else {
            [...item.target.parentElement.parentElement.parentElement.children]
                .forEach(sib => sib.children[0].classList.remove('active'));
            item.path[1].parentElement.children[0].classList.add('active');
        }
    }
    item.addEventListener('click', setActive);
}