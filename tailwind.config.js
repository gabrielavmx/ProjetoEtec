import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/***/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        screens: 
        {
            sm: "480px",
            md: "768px",
            lg: "1024px"
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        container:{
            center: true,
            padding: 
            {
                DEFAULT: '1rem',
                sm: '1.5rem'
            }
        },
        fontFamily: 
        {
            dmsans: ['DM Sans', 'sans-serif'],
            oswald: ['Oswald', 'sans-serif']
        }
    },

    plugins: [forms],
};
