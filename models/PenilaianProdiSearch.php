<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\penilaianprodi;

/**
 * penilaianprodiSearch represents the model behind the search form of `app\models\penilaianprodi`.
 */
class penilaianprodiSearch extends penilaianprodi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penilaian', 'id_indikator', 'id_prodi'], 'integer'],
            [['tahun'], 'safe'],
            [['nilai'], 'number'],
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
        $query = penilaianprodi::find();

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
            'id_penilaian' => $this->id_penilaian,
            'id_indikator' => $this->id_indikator,
            'id_prodi' => $this->id_prodi,
            'tahun' => $this->tahun,
            'nilai' => $this->nilai,
        ]);

        return $dataProvider;
    }
}
