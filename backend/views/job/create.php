<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\JobModel */

$this->title = 'Create Job Model';
$this->params['breadcrumbs'][] = ['label' => 'Job Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
