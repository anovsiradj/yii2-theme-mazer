<?php

use yii2\theme\mazer\MainAsset;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var string $content
 */

$themeMazer = MainAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>

<body>
	<?php $this->beginBody() ?>
	<div id="app">
		<?= $this->render('/layouts/mainy_sidebar') ?>

		<div id="main" class='layout-navbar navbar-fixed'>
			<?= $this->render('/layouts/mainy_header') ?>

			<div id="main-content">
				<?= $this->render('/layouts/mainy_content', compact('content')) ?>

				<?= $this->render('/layouts/mainy_footer') ?>
			</div>
		</div>
	</div>

	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>