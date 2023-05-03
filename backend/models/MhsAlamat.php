<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "alamat_mhs".
 *
 * @property int $id_alamatmhs
 * @property string $alamat_now
 * @property int $provinsi_now
 * @property int $kota_now
 * @property int $kecamatan_now
 * @property int $kelurahan_now
 * @property string $kode_pos_now
 * @property string $alamat_ktp
 * @property int $provinsi_ktp
 * @property int $kecamatan_ktp
 * @property int $kelurahan_ktp
 * @property string $kode_pos_ktp
 * @property string $notelp
 * @property string $tinggal_dengan
 * @property string $transportasi
 * @property string $jarak
 * @property string $nim
 *
 * @property Mahasiswa $nim0
 */
class MhsAlamat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alamat_mhs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alamat_now', 'provinsi_now', 'kota_now', 'kecamatan_now', 'kelurahan_now', 'kode_pos_now', 'alamat_ktp', 'provinsi_ktp', 'kecamatan_ktp', 'kelurahan_ktp', 'kode_pos_ktp', 'notelp', 'tinggal_dengan', 'transportasi', 'jarak', 'nim'], 'required'],
            [['alamat_now', 'alamat_ktp'], 'string'],
            [['provinsi_now', 'kota_now', 'kecamatan_now', 'kelurahan_now', 'provinsi_ktp', 'kecamatan_ktp', 'kelurahan_ktp'], 'integer'],
            [['kode_pos_now', 'kode_pos_ktp'], 'string', 'max' => 7],
            [['notelp'], 'string', 'max' => 13],
            [['tinggal_dengan', 'transportasi', 'jarak'], 'string', 'max' => 45],
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
            'id_alamatmhs' => 'Id Alamatmhs',
            'alamat_now' => 'Alamat Now',
            'provinsi_now' => 'Provinsi Now',
            'kota_now' => 'Kota Now',
            'kecamatan_now' => 'Kecamatan Now',
            'kelurahan_now' => 'Kelurahan Now',
            'kode_pos_now' => 'Kode Pos Now',
            'alamat_ktp' => 'Alamat Ktp',
            'provinsi_ktp' => 'Provinsi Ktp',
            'kecamatan_ktp' => 'Kecamatan Ktp',
            'kelurahan_ktp' => 'Kelurahan Ktp',
            'kode_pos_ktp' => 'Kode Pos Ktp',
            'notelp' => 'Notelp',
            'tinggal_dengan' => 'Tinggal Dengan',
            'transportasi' => 'Transportasi',
            'jarak' => 'Jarak',
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
