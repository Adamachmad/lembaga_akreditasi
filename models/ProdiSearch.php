<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\prodi;

/**
 * prodiSearch represents the model behind the search form of `app\models\prodi`.
 */
class prodiSearch extends prodi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prodi', 'id_fakultas'], 'integer'],
            [['nama_prodi', 'jenjang'], 'safe'],
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
        $query = prodi::find();

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
            'id_prodi' => $this->id_prodi,
            'id_fakultas' => $this->id_fakultas,
        ]);

        $query->andFilterWhere(['like', 'nama_prodi', $this->nama_prodi])
            ->andFilterWhere(['like', 'jenjang', $this->jenjang]);

        return $dataProvider;
    }
}
