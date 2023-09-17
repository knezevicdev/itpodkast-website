import Plyr from 'plyr';

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
    function setup() {
        setupBurgerMenu();
    }
    setup();

    document.addEventListener('livewire:navigated', setup);

    const player = new Plyr('#player', {
        loadSprite: false,
        clickToPlay: false
    });
    const playerContainer = document.querySelector('#player-container');
    const playerToggleIcon = document.querySelector('#player-toggle svg');
    window.playEpisode = (episodeSlug, src) => {
        player.source = {
            type: 'audio',
            sources: [
                {
                    src,
                    type: 'audio/mp3',
                }
            ],
        }
        player.play();
        document.cookie = `last_played_episode=${episodeSlug};path=/`;
        playerContainer.classList.add('translate-y-0');
        playerContainer.classList.remove('translate-y-full');
        playerToggleIcon.classList.add('rotate-90');
        playerToggleIcon.classList.remove('-rotate-90');
    }

    document.querySelector('#player-toggle').addEventListener('click', () => {
        playerContainer.classList.toggle('translate-y-0');
        playerContainer.classList.toggle('translate-y-full');
        playerToggleIcon.classList.toggle('rotate-90');
        playerToggleIcon.classList.toggle('-rotate-90');
    });
})();
