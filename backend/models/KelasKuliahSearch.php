<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KelasKuliah;

/**
 * KelasKuliahSearch represents the model behind the search form of `backend\models\KelasKuliah`.
 */
class KelasKuliahSearch extends KelasKuliah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kelas', 'sks'], 'integer'],
            [['nama_kelas', 'thn_akademik', 'semester', 'hari', 'tgl_mulai', 'tgl_akhir', 'jam_mulai', 'jam_akhir', 'matkul_id', 'prodi_id'], 'safe'],
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
        $query = KelasKuliah::find();

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
            'id_kelas' => $this->id_kelas,
            'sks' => $this->sks,
            
        ]);

        $query->andFilterWhere(['like', 'nama_kelas', $this->nama_kelas])
            ->andFilterWhere(['like', 'thn_akademik', $this->thn_akademik])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'hari', $this->hari])
            ->andFilterWhere(['like', 'matkul_id', $this->matkul_id])
            ->andFilterWhere(['like', 'prodi_id', $this->prodi_id]);

        return $dataProvider;
    }
}
