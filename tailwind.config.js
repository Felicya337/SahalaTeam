/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/js/SahalaTeam.js",
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                'batak-red': '#D9042B',
            }
        },
    },
    plugins: [],
}
