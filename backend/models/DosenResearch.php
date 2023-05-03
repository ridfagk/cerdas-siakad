<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "research_interest".
 *
 * @property int $id_rsch
 * @property int $dosen_id
 * @property string $judul_research
 * @property string $penjelasan
 * @property string $tahun_srch
 * @property string $jenis_srch
 *
 * @property Dosen $dosen
 */
class DosenResearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'research_interest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rsch', 'dosen_id', 'judul_research', 'penjelasan', 'tahun_srch', 'jenis_srch'], 'required'],
            [['id_rsch', 'dosen_id'], 'integer'],
            [['judul_research', 'penjelasan', 'tahun_srch', 'jenis_srch'], 'string', 'max' => 45],
            [['id_rsch'], 'unique'],
            [['dosen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::class, 'targetAttribute' => ['dosen_id' => 'id_dosen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rsch' => 'Id Rsch',
            'dosen_id' => 'Dosen ID',
            'judul_research' => 'Judul Research',
            'penjelasan' => 'Penjelasan',
            'tahun_srch' => 'Tahun Srch',
            'jenis_srch' => 'Jenis Srch',
        ];
    }

    /**
     * Gets query for [[Dosen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDosen()
    {
        return $this->hasOne(Dosen::class, ['id_dosen' => 'dosen_id']);
    }
}
