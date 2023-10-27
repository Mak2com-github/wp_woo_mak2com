/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './**/*.php',
    './assets/js/*.js'
  ],
  theme: {
    extend: {
      colors: {
        'classic-white': '#FFFFFF',
      },
      fontFamily: {
        'sans': ['Font Sans'],
        'title': ['Font Title'],
      },
      fontSize: {
        xs: '0.85rem', // 13.6px
        sm: '1rem', // 16px
        base: '1.2rem', // 18px
        l: '1.25rem', // 20px
        xl: '1.45rem', // 24px
        xl2: '1.72rem', // 28px
        xl3: '2rem', // 32px
        xl4: '2.5rem', // 40px
        xl5: '3rem', // 48px
        xl6: '4rem', // 64px
        xl7: '5rem', // 80px
      },
      height: {
        '10vh': '10vh',
        '20vh': '20vh',
        '30vh': '30vh',
        '40vh': '40vh',
        '50vh': '50vh',
        '60vh': '60vh',
        '70vh': '70vh',
        '80vh': '80vh',
        '90vh': '90vh',
        '100vh': '100vh',
      },
      backgroundColor: {
        'black-opacity': 'rgba(0,0,0,0.4)',
      },
      backgroundImage: {
        'black-gradient': 'linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, #000 100%);',
        'black-gradient-soft': 'linear-gradient(180deg, rgba(0, 0, 0, 0.00) 0%, rgba(0, 0, 0, 0.70) 100%);',
      },
      backgroundSize: {
        '100%': '100%',
      },
      keyframes: {
      },
      animation: {
      },
      gridTemplateRows: {
        'auto': 'auto',
      },
      backgroundPosition: {
        'center-top': 'center top',
        '20_center': '20% center',
        '25_center': '25% center',
        'center_-12rem': 'center -12rem',
      },
      boxShadow: {
        'shadow-light': '0 4px 4px 0 rgba(0, 0, 0, 0.20)',
        'shadow-medium': '0 2px 5px 0 rgba(0, 0, 0, 0.3)',
      },
    },
  },
  plugins: [],
}