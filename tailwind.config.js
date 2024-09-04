/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                purple: "#C63DEC",
                navbg: "#121216",
                contentbg: "#101014",
                raisinblack: "#202024",
                footbg: "#1F1F1F",
            },
        },
    },
    plugins: [require('tailwind-scrollbar'),],
};
