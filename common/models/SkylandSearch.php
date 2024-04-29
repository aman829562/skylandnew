<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Skyland;

/**
 * SkylandSearch represents the model behind the search form of `common\models\Skyland`.
 */
class SkylandSearch extends Skyland
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'total_deal'], 'integer'],
            [['biswa', 'biswasi', 'share', 'size1', 'size2', 'size3', 'size4', 'plot_no', 'north', 'south', 'east', 'west', 'clint_name', 'relation', 'address', 'amount _rec.', 'amount_words', 'payment_through', 'payment_pending', 'registry_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Skyland::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'total_deal' => $this->total_deal,
        ]);

        $query->andFilterWhere(['like', 'biswa', $this->biswa])
            ->andFilterWhere(['like', 'biswasi', $this->biswasi])
            ->andFilterWhere(['like', 'share', $this->share])
            ->andFilterWhere(['like', 'size1', $this->size1])
            ->andFilterWhere(['like', 'size2', $this->size2])
            ->andFilterWhere(['like', 'size3', $this->size3])
            ->andFilterWhere(['like', 'size4', $this->size4])
            ->andFilterWhere(['like', 'plot_no', $this->plot_no])
            ->andFilterWhere(['like', 'north', $this->north])
            ->andFilterWhere(['like', 'south', $this->south])
            ->andFilterWhere(['like', 'east', $this->east])
            ->andFilterWhere(['like', 'west', $this->west])
            ->andFilterWhere(['like', 'clint_name', $this->clint_name])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'amount _rec.', $this->amount_rec])
            ->andFilterWhere(['like', 'amount_words', $this->amount_words])
            ->andFilterWhere(['like', 'payment_through', $this->payment_through])
            ->andFilterWhere(['like', 'payment_pending', $this->payment_pending])
            ->andFilterWhere(['like', 'registry_date', $this->registry_date]);

        return $dataProvider;
    }
}
