<?php

use app\models\DepartmentStaff;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DepartmentStaffSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Department Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-staff-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Department Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'department_id',
            'staff_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DepartmentStaff $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
