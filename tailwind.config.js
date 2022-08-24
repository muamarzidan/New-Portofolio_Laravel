/** @type {import('tailwindcss').Config} */
module.exports = {
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
