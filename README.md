# Yii2 Theme Mazer

### dependencies

```
php: >=7
yii2: *
yii2-bootstrap5: *
```

### usages

this theme has 2 layout options,
`mainx` (horizontal) and `mainy` (vertical).

```php
'layout' => 'mainy', // or 'mainx'
'components' => [
	'view' => [
		'theme' => [
			'pathMap' => [
				'@app/views' => [
					'@app/views',
					'@vendor/anovsiradj/yii2-theme-mazer/views',
				],
			],
		],
	],
],
```

by default it is using dark theme, to use light theme only do this:
```php
'assetManager' => [
	'bundles' => [
		\yii2\theme\mazer\MainAsset::class => [
			'css' => [
				'app.min.css',
			],
		],
	],
],
```

### developments

```sh
# clone this repo
git clone ...

# create fresh yii2-app-basic for development
composer create-project --prefer-dist yiisoft/yii2-app-basic

cd yii2-theme-mazer

npm install

# must in this order, cause webpack-mix is broken.
npm run prod
npm run test

# create a release
git tag 1.0.0
git push origin dev
git push --tags
```

### testing

```php
[
	'controllerMap' => [
		'mazer' => \yii2\theme\mazer\TestController::class,
	],
]
```

then visit `localhost/yii2-app-basic/mazer/index`
