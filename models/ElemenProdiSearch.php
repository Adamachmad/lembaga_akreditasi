<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Elemen;

/**
 * ElemenProdiSearch represents the model behind the search form of `app\models\Elemen`.
 */
class ElemenProdiSearch extends Elemen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_elemen'], 'integer'],
            [['nama_elemen'], 'safe'],
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
        $query = Elemen::find();

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
            'id_elemen' => $this->id_elemen,
        ]);

        $query->andFilterWhere(['like', 'nama_elemen', $this->nama_elemen]);

        return $dataProvider;
    }
}
