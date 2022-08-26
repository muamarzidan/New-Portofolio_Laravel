/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resource/**/*.js',
    './resource/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [require("tailgrids/plugin")],
}
