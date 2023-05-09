<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataProdi;

/**
 * DataProdiSearch represents the model behind the search form of `backend\models\DataProdi`.
 */
class DataProdiSearch extends DataProdi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prodi'], 'integer'],
            [['kd_prodi', 'nama_prodi', 'nomor_sk', 'telp_prodi', 'email_prodi', 'nama_pt', 'thn_berdiri', 'alamat_prodi', 'akreditasi', 'deskripsi', 'visi', 'misi', 'kompetensi'], 'safe'],
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
        $query = DataProdi::find();

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
        ]);

        $query->andFilterWhere(['like', 'kd_prodi', $this->kd_prodi])
            ->andFilterWhere(['like', 'nama_prodi', $this->nama_prodi])
            ->andFilterWhere(['like', 'nomor_sk', $this->nomor_sk])
            ->andFilterWhere(['like', 'telp_prodi', $this->telp_prodi])
            ->andFilterWhere(['like', 'email_prodi', $this->email_prodi])
            ->andFilterWhere(['like', 'nama_pt', $this->nama_pt])
            ->andFilterWhere(['like', 'thn_berdiri', $this->thn_berdiri])
            ->andFilterWhere(['like', 'alamat_prodi', $this->alamat_prodi])
            ->andFilterWhere(['like', 'akreditasi', $this->akreditasi])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'visi', $this->visi])
            ->andFilterWhere(['like', 'misi', $this->misi])
            ->andFilterWhere(['like', 'kompetensi', $this->kompetensi]);

        return $dataProvider;
    }
}
