/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            FontFamily: {
                jakarta: ["Plus Jakarta Sans"],
                poppins: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [],
};
