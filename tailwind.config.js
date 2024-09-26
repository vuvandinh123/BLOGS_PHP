/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './public/**/*.php',
    './src/Views/**/*.php',
    './src/Components/**/*.php',
  ],
  theme: {
    extend: {
      flexCenter: {
        '@apply flex items-center justify-center': {},
      },
      flexBetween: {
        '@apply flex items-center justify-between': {},
      },
    },
  },
  plugins: [],
}

