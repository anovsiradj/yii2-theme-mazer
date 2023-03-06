<?php

/**
 * @var yii\web\View $this
 */

$params = array_merge($_ENV, Yii::$app->params, $this->params);
$params['APP_COPYRIGHT_AT'] ??= date('Y');
$params['APP_COPYRIGHT_BY'] ??= Yii::$app->name;
?>

<footer>
	<div class="footer clearfix mb-0 text-muted text-center">
		<?= $params['APP_COPYRIGHT_AT'] ?>
		&copy;
		<?= $params['APP_COPYRIGHT_BY'] ?>
	</div>
</footer>
