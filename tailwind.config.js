/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './pages/***/**/*.blade.php',
  ],
   // or 'media' or 'class'
   theme: {
    extend: {},
  },
  plugins: [],
}