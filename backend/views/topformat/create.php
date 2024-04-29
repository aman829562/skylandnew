<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Topformat $model */

$this->title = Yii::t('app', 'Create Topformat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topformats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topformat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
