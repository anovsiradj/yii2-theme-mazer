<?php

use yii\bootstrap5\Breadcrumbs;

/**
 * @var yii\web\View $this
 */

$this->title ??= Yii::$app->name;
$this->params['pageTitle'] ??= $this->title;
$this->params['pageSubtitle'] ??= null;
?>

<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3><?= $this->params['pageTitle'] ?></h3>
				<p class="text-subtitle text-muted">
					<?= $this->params['pageSubtitle'] ?>
				</p>
			</div>

			<div class="col-12 col-md-6 order-md-2 order-first">
				<?= Breadcrumbs::widget([
					'homeLink' => false,
					'links' => $this->params['breadcrumbs'] ?? [],
					'navOptions' => [
						'id' => false,
						'class' => 'breadcrumb-header float-start float-lg-end',
						'aria-label' => 'breadcrumb',
					],
					'options' => [
						'id' => false,
						'class' => 'breadcrumb',
					],
				]) ?>
			</div>
		</div>
	</div>
</div>

<section class="section">
	<?= $content ?>
</section>