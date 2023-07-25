<?php

namespace yii2\theme\mazer;

class TestController extends \yii\web\Controller
{
	public function init()
	{
		parent::init();

		$this->layout = 'mainy';
	}

	public function actionIndex($layout = null, $render = null)
	{
		$layout ??= $this->layout;
		$render ??= '@vendor/anovsiradj/yii2-theme-mazer/views/site/index';

		$this->layout = $layout;
		return $this->render($render);
	}
}
