<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "skyland".
 *
 * @property int $id
 * @property string $biswa
 * @property string $biswasi
 * @property string $share
 * @property string $size1
 * @property string $size2
 * @property string $size3
 * @property string $size4
 * @property string $plot_no
 * @property string $north
 * @property string $south
 * @property string $east
 * @property string $west
 * @property int $total_deal
 * @property string $clint_name
 * @property string $relation
 * @property string $address
 * @property string $amount_rec
 * @property string $amount_words
 * @property string $payment_through
 * @property string $payment_pending
 * @property string $registry_date
 */
class Skyland extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skyland';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['biswa', 'biswasi', 'share', 'size1', 'size2', 'size3', 'size4', 'plot_no', 'north', 'south', 'east', 'west', 'total_deal', 'clint_name', 'relation', 'address', 'amount_rec', 'amount_words', 'payment_through', 'payment_pending', 'registry_date'], 'required'],
            [['total_deal'], 'string'],
            [['biswa', 'biswasi', 'share', 'size1', 'size2', 'size3', 'size4', 'plot_no', 'north', 'south', 'east', 'west', 'clint_name', 'relation', 'address', 'amount_rec', 'amount_words', 'payment_through', 'payment_pending', 'registry_date'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'biswa' => 'Biswa',
            'biswasi' => 'Biswasi',
            'share' => 'Share',
            'size1' => 'Size1',
            'size2' => 'Size2',
            'size3' => 'Size3',
            'size4' => 'Size4',
            'plot_no' => 'Plot No',
            'north' => 'North',
            'south' => 'South',
            'east' => 'East',
            'west' => 'West',
            'total_deal' => 'Total Deal',
            'clint_name' => 'Clint Name',
            'relation' => 'Relation',
            'address' => 'Address',
            'amount_rec' => 'Amount Rec',
            'amount_words' => 'Amount Words',
            'payment_through' => 'Payment Through',
            'payment_pending' => 'Payment Pending',
            'registry_date' => 'Registry Date',
        ];
    }
}
