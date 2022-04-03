const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
              'base-blue': '#477998',
              'base-gray': '#E8ECF6',
              'form-gray': '#EEF1F9',
              'shell-block': '#E1E5EF',
              'input-block': '#D9DDE8',
              'neutral-accent': '#838FAB',
              'color-accent': '#D65780',
              'footer': '#0D1321',
              'school-red': '#8A181A',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
