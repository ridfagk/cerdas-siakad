<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EvalDosen;

/**
 * EvalDosenSearch represents the model behind the search form of `backend\models\EvalDosen`.
 */
class EvalDosenSearch extends EvalDosen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_evaldsn', 'kelas_id'], 'integer'],
            [['dosen_id', 'nidn', 'nim', 'tahun_akademik', 'semester', 'prodi', 'matkul_id', 'pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'pertanyaan6', 'pertanyaan7', 'pertanyaan8', 'pertanyaan9', 'pertanyaan10', 'saran', 'total_point'], 'safe'],
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
        $query = EvalDosen::find();

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
            'id_evaldsn' => $this->id_evaldsn,
            'kelas_id' => $this->kelas_id,
        ]);

        $query->andFilterWhere(['like', 'dosen_id', $this->dosen_id])
            ->andFilterWhere(['like', 'nidn', $this->nidn])
            ->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'tahun_akademik', $this->tahun_akademik])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'prodi', $this->prodi])
            ->andFilterWhere(['like', 'matkul_id', $this->matkul_id])
            ->andFilterWhere(['like', 'pertanyaan1', $this->pertanyaan1])
            ->andFilterWhere(['like', 'pertanyaan2', $this->pertanyaan2])
            ->andFilterWhere(['like', 'pertanyaan3', $this->pertanyaan3])
            ->andFilterWhere(['like', 'pertanyaan4', $this->pertanyaan4])
            ->andFilterWhere(['like', 'pertanyaan5', $this->pertanyaan5])
            ->andFilterWhere(['like', 'pertanyaan6', $this->pertanyaan6])
            ->andFilterWhere(['like', 'pertanyaan7', $this->pertanyaan7])
            ->andFilterWhere(['like', 'pertanyaan8', $this->pertanyaan8])
            ->andFilterWhere(['like', 'pertanyaan9', $this->pertanyaan9])
            ->andFilterWhere(['like', 'pertanyaan10', $this->pertanyaan10])
            ->andFilterWhere(['like', 'saran', $this->saran])
            ->andFilterWhere(['like', 'total_point', $this->total_point]);

        return $dataProvider;
    }
}
