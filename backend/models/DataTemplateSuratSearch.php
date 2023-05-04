<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataTemplateSurat;

/**
 * DataTemplateSuratSearch represents the model behind the search form of `backend\models\DataTemplateSurat`.
 */
class DataTemplateSuratSearch extends DataTemplateSurat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_surat'], 'integer'],
            [['nama_surat', 'file'], 'safe'],
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
        $query = DataTemplateSurat::find();

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
            'id_surat' => $this->id_surat,
        ]);

        $query->andFilterWhere(['like', 'nama_surat', $this->nama_surat])
            ->andFilterWhere(['like', 'file', $this->file]);

        return $dataProvider;
    }
}
