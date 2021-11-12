const mix = require('laravel-mix');

mix.setPublicPath('./');

mix.postCss('./source/css/mu-hr-compensation.css', 'css/mu-hr-compensation.css', [
    require('postcss-import'),
    require('postcss-nesting'),
    require('tailwindcss'),
		require('autoprefixer')
  ]
);

if (mix.inProduction()) {
    mix.version();
}
