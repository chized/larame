const mix = require('laravel-mix');

// Set the public path for assets. By default, it's "public".
mix.setPublicPath('public');

// Define the source paths for your JavaScript and Sass/CSS files.
const jsSourcePath = 'resources/js';
const sassSourcePath = 'resources/sass';

// Compile JavaScript files
mix.js(`${jsSourcePath}/app.js`, 'public/js')
   .extract(['font-awesome', 'lodash', 'alpine']); // Extract vendor libraries to a separate file.

// Compile Sass/CSS files
mix.sass(`${sassSourcePath}/app.scss`, 'public/css');

mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');
// Options for Mix
mix.options({
    processCssUrls: false, // Disable URL processing in CSS. Set to true to enable.
    postCss: [require('autoprefixer')] // Apply autoprefixer to CSS.
});

// Versioning and cache-busting for production builds
if (mix.inProduction()) {
    mix.version();
}

// BrowserSync for live reloading during development
if (!mix.inProduction()) {
    mix.browserSync({
        proxy: 'http://localhost/larame/public', // Replace with your local development URL.
        host: 'localhost',
        open: false, // Set to true if you want BrowserSync to open a new tab automatically.
        notify: false, // Disable BrowserSync notifications.
        files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            'public/js/**/*.js',
            'public/css/**/*.css'
        ]
    });
}
