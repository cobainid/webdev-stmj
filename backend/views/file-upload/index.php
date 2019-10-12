<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ModuleFilesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Module Files';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="module-files-index box box-primary">
    <?php Pjax::begin(); ?>
    <div class="box-header with-border">
        <?= Html::a('Create Module Files', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                // 'id',
                'title',
                [
                    'attribute' => 'path',
                    'format' => 'html',
                    'value' => function($model){
                        return Html::img(Url::base() . "/upload/" . $model->path,['class'=>'img img-thumbnail img-responsive','style' => 'max-width:60px;max-height:60px;']);
                    }
                ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
    <?php Pjax::end(); ?>
</div>
