<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ModuleFiles */

$this->title = 'Update Module Files: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Module Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="module-files-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
