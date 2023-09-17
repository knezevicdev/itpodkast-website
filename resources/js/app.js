import './bootstrap';

function animateButtonHover () {
    const container = document.querySelector('.button-mouse-move');
    const bg = document.querySelector('.button-mouse-move-bg');
    if (!container || !bg) return;

    container.addEventListener('mousemove', (e) => {
        const { clientX, clientY } = e;
        const containerRect = container.getBoundingClientRect();
        const bgRect = bg.getBoundingClientRect();

        const x = (clientX - containerRect.left) / containerRect.width;
        const y = (clientY - containerRect.top) / containerRect.height;

        const widthDiff = bgRect.width - containerRect.width;
        const heightDiff = bgRect.height - containerRect.height;

        const translateX = x * widthDiff * -2;
        const translateY =  y * heightDiff * -2;

        bg.style.transform = `translate(${translateX}px, ${translateY}px)`;
    });
}

function animateHeroImages () {
    const heroImagesShadows = document.querySelectorAll('.hero-image-shadow');
    if(heroImagesShadows.length === 0) return;

    window.addEventListener('mousemove', (e) => {
        const x = e.clientX / window.innerWidth;
        const y = e.clientY / window.innerHeight;

        heroImagesShadows.forEach((heroImageShadow) => {
            const shadowRect = heroImageShadow.getBoundingClientRect();
            const imageRect = heroImageShadow.parentElement.getBoundingClientRect();

            const widthDiff = shadowRect.width - imageRect.width;
            const heightDiff = shadowRect.height - imageRect.height;


            const translateX = x * widthDiff * -4;
            const translateY =  y * heightDiff * -4;

            heroImageShadow.style.transform = `translate(${translateX}px, ${translateY}px)`;
        });
    });
}

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

function setupScroller () {
    const scroller = document.querySelector('#scroller');
    if (!scroller) return;

    const scrollerElement = scroller.firstElementChild;
    const scrollerElements = [scrollerElement.cloneNode(true), scrollerElement.cloneNode(true), scrollerElement.cloneNode(true)];

    scrollerElements.forEach((scrollerElement) => {
        scroller.appendChild(scrollerElement);
    });
    scrollerElements.unshift(scrollerElement);

    let transformPosition = 0;
    const pixelsPerSecond = 100;
    let lastTime = Date.now();

    let animationFrameId = null;

    function animateScroll () {
        const now = Date.now();
        const timeDiff = now - lastTime;
        lastTime = now;

        const scrollerElementWidth = scrollerElement.getBoundingClientRect().width;

        transformPosition = transformPosition - (pixelsPerSecond * timeDiff / 1000);

        if (transformPosition <= -scrollerElementWidth) {
            transformPosition -= -scrollerElementWidth;
        }

        scrollerElements.forEach((scrollerElement) => {
            scrollerElement.style.transform = `translateX(${transformPosition}px)`;
        });

        animationFrameId = requestAnimationFrame(animateScroll);
    }

    animationFrameId = requestAnimationFrame(animateScroll);
}

(() => {
    animateButtonHover();
    animateHeroImages();
    setupBurgerMenu();
    setupScroller();
})()
