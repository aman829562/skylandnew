<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Skyland $model */

$this->title = Yii::t('app', 'Create Skyland');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Skylands'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skyland-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
