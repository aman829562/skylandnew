<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Skyland $model */

// $this->title = $model->id;
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Skylands'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
// yii\web\YiiAsset::register($this);
// ?>
<!-- <div class="skyland-view">

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
       

    </p> -->
<!--    <button onclick="window.print()">Print</button>-->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
  <body>
    <div>
        <h3 align="center">AGREEMENT TO SELL</h3><b>
       <?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>   M/s S K Builders VPO Lalru Tehsil Derabassi Through Partner Ranjeet Singh S/o Sh. Diwan Chand Village Lalru, Tehsil Dera Bassi, Distt S.A.S. Nagar Khewatdar of Vill Kaulimajra, Tehsil Dera Bassi, Distt SAS Nagar (PB).
  
    </div>
  <div align="justify"> <font face="" size ="4">
         <ol> <li>
         	Whereas the Company is the owner in possession of Land measuring <?=$model->biswa; ?> Biswa
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
       <u> (Plot Size <?= $model->size1."'-"; echo $model->size2.'" X ';  echo $model->size3."'-"; echo $model->size4.'"' ?> =
        <?php
        $aman=$model->size1+$model->size2;
        $aman1=$model->size3+$model->size4;
        $total=$aman*$aman1/9;
        echo $total;
        ?> Sq.Yards Plot No. <?=$model->plot_no ?> , Sky Land Kaulimajra, M.C. Lalru) Bounded North: -
       <?=$model->north?>, South:-<?=$model->south; ?>, East:- <?=$model->east; ?>, West:- <?=$model->west; ?></u> (Director Local Government Punjab
        Chandigarh Issue Letter No. CTP(LG)-2023/1234 Date 02-05-2023), Situated at Vill. Kaulimajra, Tehsil Dera bassi Distt.
        SAS Nagar, along with all rights, easements of path etc.
        <!-- <hr size="5cm" color="#000000"/> -->
       
    </li>
   
    <div align="justify">
        <li> That today on <u><?=$model->date?></u> I have confirmed the agreement to sell the above Plot at Amount <u>Rs.<?=$model->total_deal; ?></u>/- to
       <u> <?=$model->clint_name; echo $model->relation;  ?> R/o <?=$model->address?>.</u> And has received
        <u> Rs.<?=$model->amount_rec; ?>/- (<?=$model->amount_words?>) (From Which Rs. <?=$model->payment_through ?>)</u>,
        as earnest money/Biana from purchaser  before the witnesses and it is agreed between both the parties that I shall get the sale-deed executed
            & registered in favor of purchaser or any other person intended by purchaser up to <u><?=$model->registry_date; ?></u> after receiving the
        remaining amount <u><?=$model->payment_pending;?></u>/-Rs. On the refusal of seller, the purchaser can get the sale - deed executed and
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
        </b> </li></ol>
        </font>
    </div>
</div>

  </body>
  </html>
    <!-- <p class="text-justify" style="width:750px"> -->
