<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TopformatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="topformat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'biswa') ?>

    <?= $form->field($model, 'biswasi') ?>

    <?= $form->field($model, 'share') ?>

    <?= $form->field($model, 'size1') ?>

    <?php // echo $form->field($model, 'size2') ?>

    <?php // echo $form->field($model, 'size3') ?>

    <?php // echo $form->field($model, 'size4') ?>

    <?php // echo $form->field($model, 'plot_no') ?>

    <?php // echo $form->field($model, 'north') ?>

    <?php // echo $form->field($model, 'south') ?>

    <?php // echo $form->field($model, 'east') ?>

    <?php // echo $form->field($model, 'west') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
