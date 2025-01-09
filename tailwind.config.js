import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                'grey': '0 4px 4px 0px rgba(0, 0, 0, 0.25)',
            },
            colors: {
                'my-red': '#B31312',
                'black-46': 'rgba(0, 0, 0, 0.46)',
            },
        },
    },
    plugins: [],
};
