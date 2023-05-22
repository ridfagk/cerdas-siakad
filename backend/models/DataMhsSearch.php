<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataMhs;

/**
 * DataMhsSearch represents the model behind the search form of `backend\models\DataMhs`.
 */
class DataMhsSearch extends DataMhs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa'], 'integer'],
            [['nim', 'nama_mahasiswa', 'no_telp', 'tempat_lahir', 'tgl_lahir', 'agama', 'jenis_kelamin', 'email', 'tgl_masuk', 'prodi_id', 'angkatan', 'status_akademis', 'foto'], 'safe'],
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
        $query = DataMhs::find();

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
            'id_mahasiswa' => $this->id_mahasiswa,
            'tgl_lahir' => $this->tgl_lahir,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'nama_mahasiswa', $this->nama_mahasiswa])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'tgl_masuk', $this->tgl_masuk])
            ->andFilterWhere(['like', 'prodi_id', $this->prodi_id])
            ->andFilterWhere(['like', 'angkatan', $this->angkatan])
            ->andFilterWhere(['like', 'status_akademis', $this->status_akademis])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
