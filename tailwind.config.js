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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'v-darkGreen' : '#004b4e',
                'v-lightGreen' : '#64ff00',
                'v-salbei' : '#bcdbd1',
                'v-blueGrey' : '#263b4e',
                'v-red' : '#b80063',
                'v-curry' : '#d0d633'
            }
        },
    },

    plugins: [forms, typography],
};
