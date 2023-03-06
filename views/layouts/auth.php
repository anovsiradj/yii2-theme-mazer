<?php

use yii2\theme\mazer\MainAsset;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var string $content
 */

$themeMazer = MainAsset::register($this);
$themeMazer->css[] = 'auth.css';
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
    <div id="auth">
        <?= $content ?>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
