<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ModuleFiles */

$this->title = 'Create Module Files';
$this->params['breadcrumbs'][] = ['label' => 'Module Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="module-files-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
