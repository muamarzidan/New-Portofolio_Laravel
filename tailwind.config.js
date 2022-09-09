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
    extend: {
      backgroundImage: theme => ({
        'hero-pattern': "url('/images/leves.png')",
      })
    },
  },
  plugins: [require("tailgrids/plugin")],
}
