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
composer create-project --prefer-dist yiisoft/yii2-app-basic app-basic

npm update

# execute build
npm run build --env=dev
npm run build # env=prod (default, will generate minified css and js)

# create a release
git tag 1.0.0
git push origin dev
git push --tags
```
