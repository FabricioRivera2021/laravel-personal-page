/** @type {import('tailwindcss').Config} */

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/js/react/index.html", 
    "./resources/js/react/src/**/*.{js,ts,jsx,tsx}",
    "./resources/js/react/node_modules/tw-elements/js/**/*.js",
    "./resources/js/react/src/**/*.{html,js}"
  ],
  theme: {
    extend: {
      height: {
        "screen-1/2": "50vh",
      },
      spacing: {
        16: "4rem",
      },
      fontFamily: {
        'display': ['Oswald'],
        'body': ['"Open Sans"'],
        'cursive': ['"Italianno"']
      },
      backgroundImage: {
        'background': "url('/img/background.jpg')",
        'contact-background': "url('/image/contact-background.jpg')",
        'contact-img': "url('/image/img (6).jpg')",
        'sesionesBg-img': "url('/image/img (7).jpg')",
        'productBg-img': "url('/image/productMockup.jpg')",
        'streetBg-img': "url('/image/exteriores (6).jpg')",
        'sesionesPageBg': "url('/image/img (2).jpg')",
        'exterioresPageBg': "url('/image/portadaExt.jpg')",
        'productosPageBg': "url('/image/productMockupMain.jpg')"
      },
      keyframes: {
        animation: {
          '0%':{
              opacity: 0
          },
          '100%': { 
              opacity: 1
          },
        },
        'gradient-x': {
          '0%, 100%': {
              'background-size':'150% 200%',
              'background-position': 'left center'
          },
          '50%': {
              'background-size':'100% 200%',
              'background-position': 'right center'
          }
        },
      },
      animation: {
        fadeIn: 'animation 1s ease-in-out 1',
        'gradient-x':'gradient-x 15s ease infinite',
      },
      typography: {
        DEFAULT: {
          css: {
            maxWidth: '95%', // add required value here
            table: {
              width: '',
            }
          }
        }
      }
    }
  },
  plugins: [
    require('@tailwindcss/typography'),
    require("tw-elements/plugin.cjs")
  ],
}

