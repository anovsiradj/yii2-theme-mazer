# Yii2 Theme Mazer

- <https://zuramai.github.io/mazer/demo/index.html>
- <https://github.com/zuramai/mazer>

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
	'assetManager' => [
		'forceCopy' => !YII_ENV_PROD,
		'linkAssets' => true,
		'appendTimestamp' => true,
	],
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

to override views, copy and paste (copas) file from `./vendor/anovsiradj/yii2-theme-mazer/views` to `./views/`.

for example, override `main_sidebar.php`.
copas from `./vendor/anovsiradj/yii2-theme-mazer/views/main_sidebar.php` to `./views/main_sidebar.php`.

### developments

```sh
# clone this repo
git clone ...

# create fresh yii2-app-basic for testing
composer create-project --prefer-dist yiisoft/yii2-app-basic

cd yii2-theme-mazer

npm install
# npm update --save-dev --dev

# must in this order, cause webpack-mix is broken.
npm run prod
npm run test

# create a release
git tag 1.0.0
git push origin dev
git push --tags
```

add this to `./config/web.php`:

```php
[
	'controllerMap' => [
		'mazer' => \yii2\theme\mazer\TestController::class,
	],
]
```

add this to `./composer.json`:

```
"repositories": [
    {
        "type": "path",
        "url": "../yii2-theme-mazer",
        "options": {
            "symlink": true
        }
    }
]
```

then visit `localhost/yii2-app-basic/mazer/index`
