/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
            'jt-primary': '#364EBA',
            'jt-primary-dark': '#1B2D46',
            'jt-blue': '#2290CF',
            'jt-lite': '#E8EAC2',
            'jt-yellow': '#FFDE59',
        }
        },
    },
    plugins: [],
};

