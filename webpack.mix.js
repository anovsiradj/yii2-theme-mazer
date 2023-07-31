const path = require('node:path'); 
const realpath = (dest) => path.normalize(path.join(__dirname, dest));

const env = (process.env.NODE_ENV);
const mix = require('laravel-mix');

console.debug(env);

mix.disableNotifications();

mix.options({
	publicPath: './assets/dist',
	resourceRoot: './',
	assetModules: true,
	processCssUrls: true,
	legacyNodePolyfills: false,
	assetDirs: {
		fonts: 'fonts',
		images: 'images',
	},
})

mix.webpackConfig({
	cache: false,
	stats: {
		children: true,
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				include: /node_modules/,
				type: 'javascript/auto',
				resolve: {
					fullySpecified: false
				}
			},
		]
	},
	resolve: {
		fullySpecified: false,
		extensions: ['.js', '.css', '.scss', '.sass'],
		modules: [
			realpath('node_modules'),
			realpath('node_modules/mazer/src'),
			realpath('assets/src'),
		],
		alias: {
			// dont work, dont know //
			'@': realpath('node_modules/mazer/src'),
			'@/assets': realpath('node_modules/mazer/src/assets'),
		}
	}
})

mix
	.copyDirectory('assets/src/images', 'assets/dist/images')
	.copyDirectory('./node_modules/mazer/src/assets/static/images/logo', 'assets/dist/images/logo')
	.copyDirectory('./node_modules/mazer/src/assets/static/images/svg-loaders', 'assets/dist/images/svg-loaders')
	.sass('assets/src/app.scss', ".")
	.sass('assets/src/app-dark.scss', ".")
	.sass('./node_modules/mazer/src/assets/scss/pages/auth.scss', ".")
	.js('assets/src/app.js', ".")
	.js("./node_modules/mazer/src/assets/static/js/pages/horizontal-layout.js", ".")

if (env === 'production') {
	mix.minify([
		'assets/dist/app.css',
		'assets/dist/app-dark.css',
		'assets/dist/auth.css',
		'assets/dist/assets/dist/app.js',
		'assets/dist/assets/dist/horizontal-layout.js',
	]);
}
