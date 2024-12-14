/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,html,js}"],
  theme: {
    extend: {
      fontFamily:{
        poppins: ['Poppins','serif'],
        satoshi: ['Satoshi','sans-serif']
      },
      spacing:{
        '20vh': ['20vh'],
        '40vw': ['40vw'],
        '70vh': ['70vh'],
        '60vw': ['60vw'],
        'profile': ['54px'],
        '30vw': ['30vw'],
        '70vw':['70vw'],
        '20vw': ['20vw']
      },
    },
  },
  plugins: [],
}

