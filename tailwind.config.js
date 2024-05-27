import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            colors: {
                dgreen: '#065F46',
                lgreen: '#059669',
                orange: '#FD7E0B',
                tblack: '#1F2937',
                caption: '#9CA3AF',
                lwhite: '#F5F5F5',
            },
            fontSize: {
                'h1': '48px',
                'h2': '40px',
                'h3': '33px',
                'h4': '28px',
                'h5': '23px',
                'title1': '19px',
                'title2': '16px',
                'body': '13px',
                'caption': '11px',
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
