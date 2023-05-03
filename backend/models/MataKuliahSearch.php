<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MataKuliah;

/**
 * MataKuliahSearch represents the model behind the search form of `backend\models\MataKuliah`.
 */
class MataKuliahSearch extends MataKuliah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_matkul', 'sks', 'porsi_uts', 'porsi_uas', 'porsi_tugas', 'porsi_keaktifan'], 'integer'],
            [['kd_matkul', 'nama_matkul', 'semester'], 'safe'],
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
        $query = MataKuliah::find();

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
            'id_matkul' => $this->id_matkul,
            'sks' => $this->sks,
            'porsi_uts' => $this->porsi_uts,
            'porsi_uas' => $this->porsi_uas,
            'porsi_tugas' => $this->porsi_tugas,
            'porsi_keaktifan' => $this->porsi_keaktifan,
        ]);

        $query->andFilterWhere(['like', 'kd_matkul', $this->kd_matkul])
            ->andFilterWhere(['like', 'nama_matkul', $this->nama_matkul])
            ->andFilterWhere(['like', 'semester', $this->semester]);

        return $dataProvider;
    }
}
