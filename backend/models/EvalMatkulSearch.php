<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EvalMatkul;

/**
 * EvalMatkulSearch represents the model behind the search form of `backend\models\EvalMatkul`.
 */
class EvalMatkulSearch extends EvalMatkul
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_evalmk', 'kelas_id'], 'integer'],
            [['matkul_id', 'nim', 'tahun_akademik', 'semester', 'prodi', 'pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'total_point'], 'safe'],
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
        $query = EvalMatkul::find();

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
            'id_evalmk' => $this->id_evalmk,
            'kelas_id' => $this->kelas_id,
        ]);

        $query->andFilterWhere(['like', 'matkul_id', $this->matkul_id])
            ->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'tahun_akademik', $this->tahun_akademik])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'prodi', $this->prodi])
            ->andFilterWhere(['like', 'pertanyaan1', $this->pertanyaan1])
            ->andFilterWhere(['like', 'pertanyaan2', $this->pertanyaan2])
            ->andFilterWhere(['like', 'pertanyaan3', $this->pertanyaan3])
            ->andFilterWhere(['like', 'pertanyaan4', $this->pertanyaan4])
            ->andFilterWhere(['like', 'pertanyaan5', $this->pertanyaan5])
            ->andFilterWhere(['like', 'total_point', $this->total_point]);

        return $dataProvider;
    }
}
