<?php

namespace yii2\theme\mazer;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SampleController extends Controller
{
	public function init()
	{
		parent::init();

		$this->layout = 'mainy';
	}

	public function actionIndex()
	{
		$this->layout = $this->request->get('layout');

		$render = $this->request->get('render', '/site/index');
		return $this->render($render);
	}
}
