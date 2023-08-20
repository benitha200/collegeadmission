<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DepartmentStaff $model */

$this->title = 'Create Department Staff';
$this->params['breadcrumbs'][] = ['label' => 'Department Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-staff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
