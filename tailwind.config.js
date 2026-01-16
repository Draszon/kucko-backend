import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                //sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                patrick: ['Patrick Hand', 'sans-serif'],
                open: ['Open Sans', 'sans-serif'],
            },
            colors: {
                bgWhite: 'hsl(0, 0%, 93%)',
                dark: '#212730',
                sectionBg: '#00ADB5',
                pricesOrange: 'hsl(37, 100%, 68%)',
                pricesRed: 'hsl(348, 56%, 61%)',
            }
        },
    },

    plugins: [forms, typography],
};
