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
        'background': "url('/img/background.jpg')",
        'contact-background': "url('/img/contact-background.jpg')"
      }
    }
  },
  plugins: [
    require('@tailwindcss/typography')
  ],
}

