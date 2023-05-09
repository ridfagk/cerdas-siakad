<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id_prodi
 * @property string $kd_prodi
 * @property string $nama_prodi
 * @property string $nomor_sk
 * @property string|null $telp_prodi
 * @property string|null $email_prodi
 * @property string $nama_pt
 * @property string $thn_berdiri
 * @property string $alamat_prodi
 * @property string $akreditasi
 * @property string $deskripsi
 * @property string|null $visi
 * @property string|null $misi
 * @property string $kompetensi
 *
 * @property KelasKuliah[] $kelasKuliahs
 */
class DataProdi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_prodi', 'nama_prodi', 'nomor_sk', 'thn_berdiri', 'alamat_prodi', 'akreditasi', 'deskripsi', 'kompetensi'], 'required'],
            [['id_prodi'], 'integer'],
            [['kd_prodi', 'nama_prodi', 'nomor_sk', 'telp_prodi', 'email_prodi', 'nama_pt', 'thn_berdiri', 'alamat_prodi', 'akreditasi'], 'string', 'max' => 45],
            [['kd_prodi'], 'unique'],
            [['id_prodi'], 'unique'],
            [['deskripsi', 'visi', 'misi', 'kompetensi'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prodi' => 'Id Prodi',
            'kd_prodi' => 'Kd Prodi',
            'nama_prodi' => 'Nama Prodi',
            'nomor_sk' => 'Nomor Sk',
            'telp_prodi' => 'Telp Prodi',
            'email_prodi' => 'Email Prodi',
            'nama_pt' => 'Nama Pt',
            'thn_berdiri' => 'Thn Berdiri',
            'alamat_prodi' => 'Alamat Prodi',
            'akreditasi' => 'Akreditasi',
            'deskripsi' => 'Deskripsi',
            'visi' => 'Visi',
            'misi' => 'Misi',
            'kompetensi' => 'Kompetensi',
        ];
    }

    /**
     * Gets query for [[KelasKuliahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelasKuliahs()
    {
        return $this->hasMany(KelasKuliah::class, ['prodi_id' => 'kd_prodi']);
    }
}
