<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skpi".
 *
 * @property int $id_skpi
 * @property string $nim
 * @property string $prodi_id
 * @property string $waktu_lulus
 * @property string $gelar_mhs
 * @property string $nomor_ijazah
 *
 * @property Mahasiswa $nim0
 */
class DataSKPI extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skpi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_skpi', 'nim', 'prodi_id', 'waktu_lulus', 'gelar_mhs', 'nomor_ijazah'], 'required'],
            [['id_skpi'], 'integer'],
            [['nim', 'prodi_id', 'waktu_lulus', 'gelar_mhs', 'nomor_ijazah'], 'string', 'max' => 45],
            [['id_skpi'], 'unique'],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_skpi' => 'Id Skpi',
            'nim' => 'Nim',
            'prodi_id' => 'Prodi ID',
            'waktu_lulus' => 'Waktu Lulus',
            'gelar_mhs' => 'Gelar Mhs',
            'nomor_ijazah' => 'Nomor Ijazah',
        ];
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
