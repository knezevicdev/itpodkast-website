function transformPosition (number) {
    return (number - 0.5) * 2
}

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

        const translateX = transformPosition(x) * widthDiff * -2;
        const translateY =  transformPosition(y) * heightDiff * -2;

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


            const translateX = transformPosition(x) * widthDiff * -3;
            const translateY =  transformPosition(y) * heightDiff * -3;

            heroImageShadow.style.transform = `translate(${translateX}px, ${translateY}px)`;
        });
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
    setupScroller();
})();
