<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EvalTKM;

/**
 * EvalTKMSearch represents the model behind the search form of `backend\models\EvalTKM`.
 */
class EvalTKMSearch extends EvalTKM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_evaldsn'], 'integer'],
            [['nim', 'tahun_akademik', 'semester', 'prodi', 'pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'pertanyaan6', 'pertanyaan7', 'pertanyaan8', 'pertanyaan9', 'pertanyaan10', 'pertanyaan11', 'pertanyaan12', 'pertanyaan13', 'pertanyaan14', 'pertanyaan15', 'pertanyaan16', 'pertanyaan17', 'pertanyaan18', 'pertanyaan19', 'pertanyaan20', 'pertanyaan21', 'pertanyaan22', 'pertanyaan23', 'pertanyaan24', 'pertanyaan25', 'saran', 'total_point'], 'safe'],
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
        $query = EvalTKM::find();

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
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'tahun_akademik', $this->tahun_akademik])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'prodi', $this->prodi])
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
            ->andFilterWhere(['like', 'pertanyaan11', $this->pertanyaan11])
            ->andFilterWhere(['like', 'pertanyaan12', $this->pertanyaan12])
            ->andFilterWhere(['like', 'pertanyaan13', $this->pertanyaan13])
            ->andFilterWhere(['like', 'pertanyaan14', $this->pertanyaan14])
            ->andFilterWhere(['like', 'pertanyaan15', $this->pertanyaan15])
            ->andFilterWhere(['like', 'pertanyaan16', $this->pertanyaan16])
            ->andFilterWhere(['like', 'pertanyaan17', $this->pertanyaan17])
            ->andFilterWhere(['like', 'pertanyaan18', $this->pertanyaan18])
            ->andFilterWhere(['like', 'pertanyaan19', $this->pertanyaan19])
            ->andFilterWhere(['like', 'pertanyaan20', $this->pertanyaan20])
            ->andFilterWhere(['like', 'pertanyaan21', $this->pertanyaan21])
            ->andFilterWhere(['like', 'pertanyaan22', $this->pertanyaan22])
            ->andFilterWhere(['like', 'pertanyaan23', $this->pertanyaan23])
            ->andFilterWhere(['like', 'pertanyaan24', $this->pertanyaan24])
            ->andFilterWhere(['like', 'pertanyaan25', $this->pertanyaan25])
            ->andFilterWhere(['like', 'saran', $this->saran])
            ->andFilterWhere(['like', 'total_point', $this->total_point]);

        return $dataProvider;
    }
}
