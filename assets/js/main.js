//current-year
const currentYear = new Date().getFullYear();
const yearElement = document.getElementById('currentYear');
yearElement.textContent = currentYear;

//mobile-burger
const burgerIcon = document.querySelector('.burger-icon');
const menu = document.querySelector('#mega-menu-wrap-mobile-menu');
const menuBackdrop =document.querySelector('.menu-backdrop');
const body =document.querySelector('body');

burgerIcon.addEventListener('click', () => {
    burgerIcon.classList.toggle('animate');
    menu.classList.toggle('show-menu');
    body.classList.toggle('body-overflow');
    menuBackdrop.classList.toggle('menu-backdrop--show')
});
function closeMenuAndReset() {
    burgerIcon.classList.remove('animate');
    menu.classList.remove('show-menu');
    body.classList.remove('body-overflow'); // Вместо toggle используем remove
    menuBackdrop.classList.remove('menu-backdrop--show');
}

document.addEventListener('click', (event) => {
    // Проверяем, был ли клик вне элемента .mobile-menu и бургер-иконки
    if (!menu.contains(event.target) && !burgerIcon.contains(event.target)) {
        closeMenuAndReset(); // Закрываем меню и снимаем анимацию
    }
});

//mobile-submenu

const menuItems = document.querySelectorAll('.header-menu .menu-item');

menuItems.forEach((menuItem) => {
    const subMenu = menuItem.querySelector('.sub-menu');
    if (subMenu) {
        menuItem.classList.add('menu-item--arrow');
    }
});
// автодобавление иконки пдф
document.addEventListener('DOMContentLoaded', function() {
    // Проверяем, является ли текущая страница страницей товара WooCommerce
    if (document.body.classList.contains('single-product')) {
        // Находим все элементы с классом single-documents и обрабатываем их
        let documentElements = document.querySelectorAll('.single-documents a');

        documentElements.forEach(function(link) {
            // Добавляем класс product-download
            link.classList.add('product-download');

            // Добавляем атрибут target="_blank"
            link.setAttribute('target', '_blank');
        });
    }
});
