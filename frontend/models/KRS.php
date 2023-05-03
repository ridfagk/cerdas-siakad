<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "krs".
 *
 * @property int $id_krs
 * @property string $nim
 * @property string $thn_akademik
 * @property string $jatah_sks
 * @property string $sks_diambil
 * @property string $batas_isikrs
 * @property string $status_krs
 *
 * @property KelasKrs[] $kelasKrs
 * @property Mahasiswa $nim0
 */
class KRS extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'krs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_krs', 'nim', 'thn_akademik', 'jatah_sks', 'sks_diambil', 'batas_isikrs', 'status_krs'], 'required'],
            [['id_krs'], 'integer'],
            [['nim', 'thn_akademik', 'jatah_sks', 'sks_diambil', 'batas_isikrs', 'status_krs'], 'string', 'max' => 45],
            [['id_krs'], 'unique'],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_krs' => 'Id Krs',
            'nim' => 'Nim',
            'thn_akademik' => 'Thn Akademik',
            'jatah_sks' => 'Jatah Sks',
            'sks_diambil' => 'Sks Diambil',
            'batas_isikrs' => 'Batas Isikrs',
            'status_krs' => 'Status Krs',
        ];
    }

    /**
     * Gets query for [[KelasKrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelasKrs()
    {
        return $this->hasMany(KelasKrs::class, ['krs_id' => 'id_krs']);
    }

    /**
     * Gets query for [[Nim0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(Mahasiswa::class, ['nim' => 'nim']);
    }
}
