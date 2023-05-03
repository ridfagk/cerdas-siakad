<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wali_mhs".
 *
 * @property int $id_walimhs
 * @property string $nama_wali
 * @property string $nik
 * @property string $tempat_lhr
 * @property string $tggl_lhr
 * @property string $pendidikan
 * @property string $pekerjaan
 * @property string $penghasilan
 * @property string $notelp
 * @property string $nim
 *
 * @property Mahasiswa $nim0
 */
class MhsWali extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wali_mhs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_wali', 'nik', 'tempat_lhr', 'tggl_lhr', 'pendidikan', 'pekerjaan', 'penghasilan', 'notelp', 'nim'], 'required'],
            [['tggl_lhr'], 'safe'],
            [['nama_wali'], 'string', 'max' => 150],
            [['nik'], 'string', 'max' => 16],
            [['tempat_lhr', 'pendidikan', 'pekerjaan', 'penghasilan', 'nim'], 'string', 'max' => 45],
            [['notelp'], 'string', 'max' => 13],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_walimhs' => 'Id Walimhs',
            'nama_wali' => 'Nama Wali',
            'nik' => 'Nik',
            'tempat_lhr' => 'Tempat Lhr',
            'tggl_lhr' => 'Tggl Lhr',
            'pendidikan' => 'Pendidikan',
            'pekerjaan' => 'Pekerjaan',
            'penghasilan' => 'Penghasilan',
            'notelp' => 'Notelp',
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
