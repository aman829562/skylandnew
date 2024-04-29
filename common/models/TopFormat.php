<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "top_format".
 *
 * @property int $id
 * @property string $biswa
 * @property string $biswasi
 * @property string $share
 * @property int $size1
 * @property int $size2
 * @property int $size3
 * @property int $size4
 * @property int $ttsize
 * @property int $plot_no
 * @property string $north
 * @property string $south
 * @property string $east
 * @property string $west
 */
class TopFormat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'top_format';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['biswa', 'biswasi', 'share', 'size1', 'size2', 'size3', 'size4', 'plot_no', 'north', 'south', 'east', 'west'], 'required'],
            [['biswa', 'biswasi', 'share', 'north', 'south', 'east', 'west','size1', 'size2', 'size3', 'size4','ttsize', 'plot_no'], 'string', 'max' => 512],
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
            'ttsize' => 'Toatl Size',
            'plot_no' => 'Plot No',
            'north' => 'North',
            'south' => 'South',
            'east' => 'East',
            'west' => 'West',
        ];
    }
}
