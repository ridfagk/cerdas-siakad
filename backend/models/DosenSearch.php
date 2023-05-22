<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pegawai;

/**
 * DosenSearch represents the model behind the search form of `backend\models\Pegawai`.
 */
class DosenSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai', 'nidn', 'no_telp'], 'integer'],
            [['nip', 'nama_pegawai', 'alamat_pegawai', 'tempat_lahir', 'tgl_lahir', 'agama', 'jenis_kelamin', 'email', 'tgl_masuk', 'jabatan', 'pendidikan_akhir', 'status_ikatankerja', 'status_aktif', 'foto'], 'safe'],
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
        $query = Pegawai::find()->where(['jabatan'=>'Dosen']);

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
            'id_pegawai' => $this->id_pegawai,
            'nidn' => $this->nidn,
            'no_telp' => $this->no_telp,
            'tgl_lahir' => $this->tgl_lahir,
            'tgl_masuk' => $this->tgl_masuk,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nama_pegawai', $this->nama_pegawai])
            ->andFilterWhere(['like', 'alamat_pegawai', $this->alamat_pegawai])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'pendidikan_akhir', $this->pendidikan_akhir])
            ->andFilterWhere(['like', 'status_ikatankerja', $this->status_ikatankerja])
            ->andFilterWhere(['like', 'status_aktif', $this->status_aktif])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
