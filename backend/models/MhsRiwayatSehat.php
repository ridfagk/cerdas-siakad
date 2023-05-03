<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "riwayat_sehat_mhs".
 *
 * @property int $id_rwytsehat
 * @property string $berat
 * @property string $tinggi
 * @property string $goldar
 * @property string $keadaan_mata
 * @property string $alat_mata
 * @property string $keadaan_telinga
 * @property string $alat_telinga
 * @property string $sakit_berat
 * @property string $nim
 *
 * @property Mahasiswa $nim0
 */
class MhsRiwayatSehat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_sehat_mhs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['berat', 'tinggi', 'goldar', 'keadaan_mata', 'alat_mata', 'keadaan_telinga', 'alat_telinga', 'sakit_berat', 'nim'], 'required'],
            [['berat', 'tinggi'], 'string', 'max' => 10],
            [['goldar'], 'string', 'max' => 5],
            [['keadaan_mata', 'alat_mata', 'keadaan_telinga', 'alat_telinga', 'sakit_berat', 'nim'], 'string', 'max' => 45],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rwytsehat' => 'Id Rwytsehat',
            'berat' => 'Berat',
            'tinggi' => 'Tinggi',
            'goldar' => 'Goldar',
            'keadaan_mata' => 'Keadaan Mata',
            'alat_mata' => 'Alat Mata',
            'keadaan_telinga' => 'Keadaan Telinga',
            'alat_telinga' => 'Alat Telinga',
            'sakit_berat' => 'Sakit Berat',
            'nim' => 'Nim',
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
