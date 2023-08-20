<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $content string */
 
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php $this->registerMetaTag(['charset' => Yii::$app->charset]) ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
    <div class="site-login">
    <!-- Your view content here -->
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <!-- ... Form fields and other content ... -->
    <?php ActiveForm::end(); ?>
</div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
