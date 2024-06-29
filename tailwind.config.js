/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'home-desktop': 'url("images/home-bg/desktop.png")'
            },
            colors: {
                'primary': '#0088CD',
            },
            fontFamily: {
                'lato': 'Lato'
            }
        },
    },
    plugins: [],
}
