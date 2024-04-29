<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Topformat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="topformat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'biswa')->textInput(['value' => '2',]) ?>

    <?= $form->field($model, 'biswasi')->textInput(['value' => '0']) ?>

    <?= $form->field($model, 'share')->textInput(['value' => '100']) ?>

    <?= $form->field($model, 'size1')->textInput(['value'=>'20']) ?>

    <?= $form->field($model, 'size2')->textInput(['value'=>'0']) ?>

    <?= $form->field($model, 'size3')->textInput(['value'=>'45']) ?>

    <?= $form->field($model, 'size4')->textInput(['value'=>'0']) ?>

    <?= $form->field($model, 'plot_no')->textInput() ?>

    <?= $form->field($model, 'north')->textInput(['value' => 'Road 30 Feet']) ?>

    <?= $form->field($model, 'south')->textInput(['value' => 'Plot No. ']) ?>

    <?= $form->field($model, 'east')->textInput(['value'=>'Plot No. ']) ?>

    <?= $form->field($model, 'west')->textInput(['value'=>'Plot No. ']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
