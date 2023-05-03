<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ortu_mhs".
 *
 * @property int $id_ortumhs
 * @property string $nik_ayah
 * @property string $notelp_ayah
 * @property string $nama_ayah
 * @property string $tempat_lhr_ayah
 * @property string $tggl_lhr_ayah
 * @property string $agama_ayah
 * @property string $pekerjaan_ayah
 * @property string $penghasilan_ayah
 * @property string $pendidikan_ayah
 * @property string $nik_ibu
 * @property string $notelp_ibu
 * @property string $nama_ibu
 * @property string $tempat_lhr_ibu
 * @property string $tggl_lhr_ibu
 * @property string $agama_ibu
 * @property string $pekerjaan_ibu
 * @property string $penghasilan_ibu
 * @property string $pendidikan_ibu
 * @property string $nim
 *
 * @property Mahasiswa $nim0
 */
class MhsOrtu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ortu_mhs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik_ayah', 'notelp_ayah', 'nama_ayah', 'tempat_lhr_ayah', 'tggl_lhr_ayah', 'agama_ayah', 'pekerjaan_ayah', 'penghasilan_ayah', 'pendidikan_ayah', 'nik_ibu', 'notelp_ibu', 'nama_ibu', 'tempat_lhr_ibu', 'tggl_lhr_ibu', 'agama_ibu', 'pekerjaan_ibu', 'penghasilan_ibu', 'pendidikan_ibu', 'nim'], 'required'],
            [['nik_ayah', 'notelp_ayah', 'nama_ayah', 'tempat_lhr_ayah', 'tggl_lhr_ayah', 'agama_ayah', 'pekerjaan_ayah', 'penghasilan_ayah', 'pendidikan_ayah', 'nik_ibu', 'notelp_ibu', 'nama_ibu', 'tempat_lhr_ibu', 'tggl_lhr_ibu', 'agama_ibu', 'pekerjaan_ibu', 'penghasilan_ibu', 'pendidikan_ibu'], 'string', 'max' => 45],
            [['nim'], 'string', 'max' => 15],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ortumhs' => 'Id Ortumhs',
            'nik_ayah' => 'Nik Ayah',
            'notelp_ayah' => 'Notelp Ayah',
            'nama_ayah' => 'Nama Ayah',
            'tempat_lhr_ayah' => 'Tempat Lhr Ayah',
            'tggl_lhr_ayah' => 'Tggl Lhr Ayah',
            'agama_ayah' => 'Agama Ayah',
            'pekerjaan_ayah' => 'Pekerjaan Ayah',
            'penghasilan_ayah' => 'Penghasilan Ayah',
            'pendidikan_ayah' => 'Pendidikan Ayah',
            'nik_ibu' => 'Nik Ibu',
            'notelp_ibu' => 'Notelp Ibu',
            'nama_ibu' => 'Nama Ibu',
            'tempat_lhr_ibu' => 'Tempat Lhr Ibu',
            'tggl_lhr_ibu' => 'Tggl Lhr Ibu',
            'agama_ibu' => 'Agama Ibu',
            'pekerjaan_ibu' => 'Pekerjaan Ibu',
            'penghasilan_ibu' => 'Penghasilan Ibu',
            'pendidikan_ibu' => 'Pendidikan Ibu',
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
