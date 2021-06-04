module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'ubuntu': ['Squada One','cursive'],
        'base': ['Bree Serif','sans-serif']
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
