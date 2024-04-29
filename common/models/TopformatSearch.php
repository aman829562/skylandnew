<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Topformat;

/**
 * TopformatSearch represents the model behind the search form of `common\models\Topformat`.
 */
class TopformatSearch extends Topformat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'size1', 'size2', 'size3', 'size4','ttsize', 'plot_no'], 'integer'],
            [['biswa', 'biswasi', 'share', 'north', 'south', 'east', 'west'], 'safe'],
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
        $query = Topformat::find();

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
            'size1' => $this->size1,
            'size2' => $this->size2,
            'size3' => $this->size3,
            'size4' => $this->size4,
            'ttsize' => $this->ttsize,
            'plot_no' => $this->plot_no,
        ]);

        $query->andFilterWhere(['like', 'biswa', $this->biswa])
            ->andFilterWhere(['like', 'biswasi', $this->biswasi])
            ->andFilterWhere(['like', 'share', $this->share])
            ->andFilterWhere(['like', 'north', $this->north])
            ->andFilterWhere(['like', 'south', $this->south])
            ->andFilterWhere(['like', 'east', $this->east])
            ->andFilterWhere(['like', 'west', $this->west]);

        return $dataProvider;
    }
}
