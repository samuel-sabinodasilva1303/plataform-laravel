/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'blur-black': "url('/resources/src/images/blur-black-bg.png')",
        'blur-black-double': "url('/resources/src/images/blur-black-bg-double.png')",
        'yellow-bottom': "url('/resources/src/images/bg-yellow-bottom.png')",
        'page-banner': "url('/resources/src/images/page_banner.png')",
      },
      colors: {
        'yellow-hoch': '#E8C925',
        'with-custom': '#ffff',
        'color-cinza': '#242424',
        'black-color': '#000',
        'custom-color': 'rgb(99 98 98)',
        
      },
      fontSize: {
        'xs-custom': '0.8rem',
        '13px': '13px',
        '12': '12px',
        'custom-xrs': '3.5rem',
        '50px': '50px',
        '56px': '56px',

      },

      lineHeight: {
        '120': '1.2',
      },
      zIndex: {
        '1000': '1000',
      },

      fontWeight: {
        '300': '300',
      },
      margin: {
        '3em': '3em',
        '1em': '1em',
        '-3em': '-3em',
        '-7em': '-7em'
      },
      inset: {
        '3em': '3em',
        '1em': '1em',
      },
      zIndex: {
        '-1': '-1',
        '10000': '10000'
      },
      screens: {
        'pp': '320px',
        'sm': '520px',
        'md': '700px',
        'lg': '1000px',
        'xl': '1300px',
        '2xl': '1500px',
        '3xl': '2100px',
      },
      borderWidth: {
        '1': '1px',
      }
    },
  },
  plugins: [],
}

