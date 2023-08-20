<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DepartmentStaff $model */

$this->title = 'Update Department Staff: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Department Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="department-staff-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
