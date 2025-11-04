/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/js/**/*.js",
  ],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        "batak-red": "#D9042B",
      },
    },
  },
  plugins: [],
};
