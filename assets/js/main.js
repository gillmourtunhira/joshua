// Adding Drop-down Menu icon
const itemMenuList = document.querySelector('.main__menu').children;
const subMenuList = Array.from(itemMenuList);

subMenuList.forEach(menuItem => {
    if (menuItem.classList.contains('menu-item-has-children')) {
        menuItem.classList.add('drop__menu');
    }
});

// Add Class
const a = document.querySelectorAll('.nav--links div ul li a');
// Menu Slide-In
window.addEventListener('load', () => {
    document.body.classList.remove('preload');

    a.forEach(link => {
        link.classList.add('nav--link');
    });
})

document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('.nav');

    document.querySelector('#btnNav').addEventListener('click', () => {
        nav.classList.add('nav--open');
    });

    document.querySelector('.nav--overlay').addEventListener('click', () => {
        nav.classList.remove('nav--open');
    });
});

// Mission More Arrow
const mvBtn = document.querySelectorAll('.objectives--statement span');
const siteUrl = 'https://thejoshuagenerationplatforms.org/about/';

mvBtn.forEach((missionsBtn) => {
    missionsBtn.addEventListener('click', d => {
        window.location.href = siteUrl;
    });
});