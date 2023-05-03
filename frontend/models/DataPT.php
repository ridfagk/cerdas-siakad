<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data_pt".
 *
 * @property string $kd_pt
 * @property string $nama_pt
 * @property string $tahun_berdiri
 * @property string $pendiri
 * @property string $alamat_pt
 * @property string $provinsi
 * @property string $kabupaten
 * @property string $kecamatan
 * @property string $desa
 * @property string $kode_pos
 * @property string $email
 * @property string $website
 * @property int $no_telp
 * @property string $akta_pendirian
 * @property string $akreditasi
 * @property string $status
 */
class DataPT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_pt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pt', 'nama_pt', 'tahun_berdiri', 'pendiri', 'alamat_pt', 'provinsi', 'kabupaten', 'kecamatan', 'desa', 'kode_pos', 'email', 'website', 'no_telp', 'akta_pendirian', 'akreditasi', 'status'], 'required'],
            [['alamat_pt'], 'string'],
            [['no_telp'], 'integer'],
            [['kd_pt', 'akta_pendirian', 'akreditasi', 'status'], 'string', 'max' => 45],
            [['nama_pt', 'website'], 'string', 'max' => 250],
            [['tahun_berdiri'], 'string', 'max' => 25],
            [['pendiri', 'email'], 'string', 'max' => 150],
            [['provinsi', 'kabupaten', 'kecamatan', 'desa'], 'string', 'max' => 15],
            [['kode_pos'], 'string', 'max' => 10],
            [['kd_pt'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_pt' => 'Kd Pt',
            'nama_pt' => 'Nama Pt',
            'tahun_berdiri' => 'Tahun Berdiri',
            'pendiri' => 'Pendiri',
            'alamat_pt' => 'Alamat Pt',
            'provinsi' => 'Provinsi',
            'kabupaten' => 'Kabupaten',
            'kecamatan' => 'Kecamatan',
            'desa' => 'Desa',
            'kode_pos' => 'Kode Pos',
            'email' => 'Email',
            'website' => 'Website',
            'no_telp' => 'No Telp',
            'akta_pendirian' => 'Akta Pendirian',
            'akreditasi' => 'Akreditasi',
            'status' => 'Status',
        ];
    }
}
