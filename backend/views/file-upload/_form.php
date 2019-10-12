<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\ModuleFiles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="module-files-form box box-primary">
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="box-body table-responsive">

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'image')->widget(FileInput::classname(),
            [
                'options' => [
                    'accept' => ['image/png','image/jpg', 'image/gif'],
                    'multiple' => true
                ],
            ]) ?>

    </div>
    <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
