<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SiswaModel */

$this->title = 'Create Siswa Model';
$this->params['breadcrumbs'][] = ['label' => 'Siswa Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-model-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
