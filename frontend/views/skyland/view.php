<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Skyland $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Skylands'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="skyland-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
<!--        <button onclick="window.print()">Print this page</button>-->

    </p>
   <div class="text-justify" style="width: 720px">
        1) 	Whereas the Company is the owner in possession of Land measuring <?=$model->biswa; ?> Biswa
        <?php if($model->biswasi=='0'){

        }else{
           echo  $model->biswasi.' Biswasi';
        } ?>
        Khata No. 69/188 Khasra Nos.
        1176(4-0),1177(4-0),1178(4-0),1212(4-0), Kitte 04 Total Land 16 Bigha being <?=$share=$model->share/2.5;
         $share;?>/6400 Share I.e. <?=$model->biswa ?> Biswa
        <?php if($model->biswasi =='0'){

        }else{

             echo $model->biswasi.' Biswasi';
        } ?>
        (Plot Size <?= $model->size1."'-"; echo $model->size2.'" X ';  echo $model->size3."'-"; echo $model->size4.'"' ?> =
        <?php
        $aman=$model->size1+$model->size2;
        $aman1=$model->size3+$model->size4;
        $total=$aman*$aman1/9;
        echo $total;
        ?> Sq.Yards Plot No. <?=$model->plot_no ?> , Sky Land Kaulimajra, M.C. Lalru) Bounded North: -
       <?=$model->north?>, South:-<?=$model->south; ?>, East:- <?=$model->east; ?>, West:- <?=$model->west; ?> (Director Local Government Punjab
        Chandigarh Issue Letter No. CTP(LG)-2023/1234 Date 02-05-2023), Situated at Vill. Kaulimajra, Tehsil Dera bassi Distt.
        SAS Nagar, along with all rights, easements of path etc.
   </div>
    <div>
        2) 	That today on <u>16/03/2024 </u> I have confirmed the agreement to sell the above Plot at Amount Rs.<?=$model->total_deal; ?>/- to
        <?=$model->clint_name ;  $model->relation;  ?> R/o <?=$model->address?>. And has received as earnest
        money Rs.<?=$model->amount_rec; ?>/- (<?=$model->amount_words?>) (From Which Rs. <?=$model->payment_through ?>).
        As earnest money/Biana from purchaser  before the witnesses and it is agreed between both the parties that I shall get the sale-deed executed
        & registered in favor of purchaser or any other person intended by purchaser up to <?=$model->registry_date; ?> after receiving the
        remaining amount <?=$model->payment_pending;?>/-Rs. On the refusal of seller, the purchaser can get the sale - deed executed and
        registered on depositing the remaining amount in the court and will also be entitled to get his expensive so
        incurred from seller. But if purchaser resiles from the agreement or breaks the agreement, his earnest money
        will be forfeited to the seller & agreement of sale will be considered cancelled. The expenses of the sale deed
        will be borne by purchaser. if the purchaser enters into further agreement, then I shall have no objection. The
        above land is free from all types of encumbrances. The possession of the land will be delivered at the time of
        registration of the sale - deed. If the seller has taken any previous loan from the bank etc. then he would get
        it cleared from the bank etc. before the time of sale deed. The seller has not entered into any oral or written
        agreement about this land with any other person up to date previously.  All these terms and conditions are
        binding on both the parties and their privies/ heirs. Hence the agreement to sell is got written in my complete
        senses as that it may be used at proper time. The writing has been heard by sellers and understood and accepted
        true and correct.
    </div>

</div>
<p class="text-justify" style="width:750px">
