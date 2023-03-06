# Yii2 Theme Mazer

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

### themes

by default it is using dark theme, to use light theme do this:
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

### dependencies

```
php: >=7
npm-asset/bootstrap: ~5
yii2-bootstrap5: *
```

### developments

```sh
git clone ...

composer create-project --prefer-dist yiisoft/yii2-app-basic app-basic

npm run build # env=prod (default)
npm run build --env=dev
```

env `prod` will generate minified css and js.
