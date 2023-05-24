<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "riwayat_pend_pegawai".
 *
 * @property int $id_rwytpegawai
 * @property int $pegawai_id
 * @property string $jenjang_pendidikan
 * @property string $nama_institusi
 * @property string $prodi
 * @property string $tahun_mulai
 *
 * @property Pegawai $pegawai
 */
class RiwayatPendPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_pend_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'pegawai_id', 'jenjang_pendidikan', 'nama_institusi', 'prodi', 'tahun_mulai', 'tahun_selesai'], 'required'],
            [['id_rwytpegawai', 'pegawai_id'], 'integer'],
            [['jenjang_pendidikan', 'nama_institusi', 'prodi', 'tahun_mulai', 'tahun_selesai'], 'string', 'max' => 45],
            [['id_rwytpegawai'], 'unique'],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['pegawai_id' => 'id_pegawai']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rwytpegawai' => 'Id Rwytpegawai',
            'pegawai_id' => 'Pegawai ID',
            'jenjang_pendidikan' => 'Jenjang Pendidikan',
            'nama_institusi' => 'Nama Institusi',
            'prodi' => 'Prodi',
            'tahun_mulai' => 'Tahun Mulai',
            'tahun_selesai' => 'Tahun Selesai',
        ];
    }

    /**
     * Gets query for [[Pegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::class, ['id_pegawai' => 'pegawai_id']);
    }
}
