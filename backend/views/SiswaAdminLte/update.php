<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SiswaModel */

$this->title = 'Update Siswa Model: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Siswa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siswa-model-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
