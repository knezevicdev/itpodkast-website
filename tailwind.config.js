const colors = require('tailwindcss/colors')
module.exports = {
    content: ['./resources/views/**/*.php', './resources/js/**/*.js'],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                orange: '#fd8910',
                black: '#0e0c09',
                bg: '#fcf5ee',
                gray: '#696664'
            },
            container: {
                center: true,
            },
            gridTemplateColumns: {
                'header': '1.25fr .5fr 1.25fr',
                'episodes': '1.75fr .75fr',
                'episode': '.5fr .75fr'
            },
            fontFamily: {
                'anonymous-pro': ['"Anonymous Pro"', 'monospace'],
                'azeret-mono': ['"Azeret Mono"', 'monospace'],
            },
            boxShadow: {
                'effect-sm': '3px 2.5px #0e0c09',
                'effect': '6px 5px #0e0c09',
                'effect-orange': '6px 5px #fd8910',
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
