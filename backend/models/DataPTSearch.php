<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataPT;

/**
 * DataPTSearch represents the model behind the search form of `backend\models\DataPT`.
 */
class DataPTSearch extends DataPT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pt', 'nama_pt', 'tahun_berdiri', 'pendiri', 'alamat_pt', 'provinsi', 'kabupaten', 'kecamatan', 'desa', 'kode_pos', 'email', 'website', 'akta_pendirian', 'akreditasi', 'status'], 'safe'],
            [['no_telp'], 'integer'],
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
        $query = DataPT::find();

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
            'no_telp' => $this->no_telp,
        ]);

        $query->andFilterWhere(['like', 'kd_pt', $this->kd_pt])
            ->andFilterWhere(['like', 'nama_pt', $this->nama_pt])
            ->andFilterWhere(['like', 'tahun_berdiri', $this->tahun_berdiri])
            ->andFilterWhere(['like', 'pendiri', $this->pendiri])
            ->andFilterWhere(['like', 'alamat_pt', $this->alamat_pt])
            ->andFilterWhere(['like', 'provinsi', $this->provinsi])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'desa', $this->desa])
            ->andFilterWhere(['like', 'kode_pos', $this->kode_pos])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'akta_pendirian', $this->akta_pendirian])
            ->andFilterWhere(['like', 'akreditasi', $this->akreditasi])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
