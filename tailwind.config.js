import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.tsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                dm: ['DM Sans', ...defaultTheme.fontFamily.sans]
            },
            colors: {
              'primary': '#0A64EE',
              'primary-hovered': '#045BDF',
              'secondary': '#EBF8FF',
              'accent': '#A2A2A2',
            }
        },
    },

    plugins: [forms],
};
