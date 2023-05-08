/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./pages/**/*.{html,js}",
        "./components/**/*.{html,js}",
    ],
    darkMode: "class",
    theme: {
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
