const env = (process.env.npm_config_env || 'prod')
const mix = require("laravel-mix")

mix.options({
	publicPath: './assets/dist',
	resourceRoot: './',
	assetModules: true,
	processCssUrls: true,
	assetDirs: {
		fonts: 'fonts',
		images: 'images',
	},
})

mix
	.copyDirectory('assets/src/images', 'assets/dist/images')
	.copyDirectory('./node_modules/mazer/src/assets/images/logo', 'assets/dist/images/logo')
	.copyDirectory('./node_modules/mazer/src/assets/images/svg-loaders', 'assets/dist/images/svg-loaders')
	.sass('assets/src/app.scss', ".")
	.sass('./node_modules/mazer/src/assets/scss/themes/dark/app-dark.scss', ".")
	.sass('./node_modules/mazer/src/assets/scss/pages/auth.scss', ".")
	.js('assets/src/app.js', ".")
	.js('./node_modules/mazer/src/assets/js/pages/horizontal-layout.js', ".")

if (env === 'prod') {
	mix.minify([
		'assets/dist/app.css',
		'assets/dist/app-dark.css',
		'assets/dist/assets/dist/app.js',
	])
}
