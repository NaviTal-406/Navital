// import defaultTheme from 'tailwindcss/defaultTheme';
// import forms from '@tailwindcss/forms';
const { blue, teal, sky } = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "node_modules/preline/dist/*.js",
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "1rem",
                md: "1rem",
                lg: "1rem",
                xl: "3rem",
                "2xl": "13rem",
            },
        },

        fontFamily: {
            sans: ["Be Vietnam Pro", "sans-serif"],
        },

        extend: {
            colors: {
                biru: "#155AC1",
                primary: blue[600],
                ijo: teal[600],
                langit: sky[900],
            },
        },
    },

    plugins: [
        require("@frostui/tailwindcss/plugin"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("preline/plugin"),
    ],
};
