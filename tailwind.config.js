/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./**/*.html", "./**/*.js", "./**/*.css"],
  theme: {
    extend: {
      fontFamily: {
        anjoman: ["AnjomanMaxVF", "sans-serif"],
      },
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: false,
    rtl: true,
    prefix: "daisy-",
  },
};
