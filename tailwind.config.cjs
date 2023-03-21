/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "site/snippets/**/*.php",
    "site/templates/**/*.php",
    "site/plugins/custom/**/*.php",
  ],
  theme: {
    fontSize: {
      sm: '0.8rem',
      base: '1rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.758rem',
    }
  },
  plugins: [],
}
