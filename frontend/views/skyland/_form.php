<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Skyland $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skyland-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'biswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biswasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'share')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plot_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'north')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'south')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'east')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'west')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_deal')->textInput() ?>

    <?= $form->field($model, 'clint_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount_rec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount_words')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_through')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registry_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
