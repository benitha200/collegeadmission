<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DepartmentStudent $model */

$this->title = 'Create Department Student';
$this->params['breadcrumbs'][] = ['label' => 'Department Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-student-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
