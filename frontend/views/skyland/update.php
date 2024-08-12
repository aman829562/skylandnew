<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Skyland $model */

$this->title = Yii::t('app', 'Plot Detail: {name}', [
    'name' => $model->plot_no,
]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Skylands'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
//?>
<div class="skyland-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
