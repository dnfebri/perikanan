const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        container: {
            center: true,
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "brand-1": "#173E65",
                "brand-2": "#1E4E7C",
                "brand-3": "#017DBB",
                "brand-4": "#91AEBE",
                "brand-5": "#CDEFF0",
                "secondary-1": "#FFD600",
            }
        },
        fontFamily: {
          'Poppins': ['Poppins', 'sans-serif'],
          'sans-serif': ['sans-serif'],
        }
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
};
