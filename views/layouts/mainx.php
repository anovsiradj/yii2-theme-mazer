<?php

use yii2\theme\mazer\MainAsset;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var string $content
 */

$themeMazer = MainAsset::register($this);
$themeMazer->js[] = 'assets/dist/horizontal-layout.js';
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>

	<link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
	<link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
</head>

<body>
	<?php $this->beginBody() ?>
	<div id="app">
		<div id="main" class="layout-horizontal">
			<?= $this->render('/layouts/mainx_header') ?>

			<div class="content-wrapper container">
				<?= $this->render('/layouts/mainy_content', compact('content')) ?>
			</div>

			<?= $this->render('/layouts/mainy_footer') ?>
		</div>
	</div>

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>