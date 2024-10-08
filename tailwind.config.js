/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        'noto-sans': ["Noto Sans Arabic"],
      },
      spacing: {
        128: "32rem",
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
}
