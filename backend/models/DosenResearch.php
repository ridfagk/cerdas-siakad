<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "research_interest".
 *
 * @property int $id_rsch
 * @property int $pegawai_id
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
            [['pegawai_id', 'judul_research', 'penjelasan', 'tahun_srch', 'jenis_srch'], 'required'],
            [['id_rsch', 'pegawai_id'], 'integer'],
            [['judul_research', 'penjelasan', 'tahun_srch', 'jenis_srch'], 'string', 'max' => 45],
            [['id_rsch'], 'unique'],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['pegawai_id' => 'id_pegawai']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rsch' => 'Id Rsch',
            'pegawai_id' => 'Dosen ID',
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
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::class, ['id_pegawai' => 'pegawai_id']);
    }
}
