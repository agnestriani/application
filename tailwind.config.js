/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'poppins' : ['Poppins','sans-serif'],
        'balsamiq' : ['Balsamiq Sans','sans-serif'],
      },
      backgroundImage: {
        'gradient-custom':"linear-gradient(to left,#1A3151,#0F172A)",
        'gradient-custom-card':"linear-gradient(#3687FF,#EDEDED)",
        'gradient-custom-search':"linear-gradient(to bottom,#408DFE,#FFFFFF)",
      },
    },
  },
  plugins: [],
}