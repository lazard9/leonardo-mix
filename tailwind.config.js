/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/**/*.{js,ts,jsx,tsx}",
        "./blocks/**/*.{php,js}",
        "./template-parts/**/*.php",
        "./inc/**/*.php",
        "./*.php"
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}

