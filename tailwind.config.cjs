/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "site/snippets/**/*.php",
    "site/templates/**/*.php",
    "site/plugins/custom/**/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Ocr', 'Helvetica', 'Arial', 'sans-serif']
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}
