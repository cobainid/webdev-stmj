<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SiswaModelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswa Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-model-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Siswa Model', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'nama',
                'no_hp',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
