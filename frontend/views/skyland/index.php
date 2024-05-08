<?php

use common\models\Skyland;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\SkylandSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Skylands');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skyland-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Skyland'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'biswa',
//            'biswasi',
//            'share',
//            'size1',
            //'size2',
            //'size3',
            //'size4',
            'plot_no',
            //'north',
            //'south',
            //'east',
            //'west',
            'total_deal',
            'clint_name',
            //'relation',
            //'address',
            //'amount_rec',
            //'amount_words',
            //'payment_through',
            //'payment_pending',
            //'registry_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Skyland $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
