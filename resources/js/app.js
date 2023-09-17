function setupBurgerMenu () {
    const burgerMenu = document.querySelector('#burger-menu');
    const menu  = document.querySelector('#menu');
    if (!burgerMenu || !menu) return;

    burgerMenu.addEventListener('click', () => {
        menu.classList.toggle('-translate-y-full');
        menu.classList.toggle('translate-y-0');
        burgerMenu.classList.toggle('bg-bg');
        burgerMenu.classList.toggle('bg-black');
        burgerMenu.classList.toggle('fill-black');
        burgerMenu.classList.toggle('fill-white');
    });
}

(() => {
    setupBurgerMenu();
})();
