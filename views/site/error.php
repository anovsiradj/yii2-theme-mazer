<?php
use jeemce\AppView;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var AppView $this
 * @var string $name
 * @var string $message
 * @var Exception $exception
 */

$this->title = $this->params['pageName'] = $name;
?>

<div class="error-page">
	<p class="fs-5 text-gray-600">
		<?= nl2br(Html::encode($message)) ?>
	</p>
</div>
