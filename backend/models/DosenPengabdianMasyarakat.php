<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengabdian_masyarakat".
 *
 * @property int $id_pengabdian
 * @property int $dosen_id
 * @property string $judul_pengabdian
 * @property string $tgl_pengabdian
 * @property string $lokasi
 * @property string|null $mitra
 * @property string|null $mahasiswa_terlibat
 * @property string $penjelasan
 *
 * @property Dosen $dosen
 */
class DosenPengabdianMasyarakat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengabdian_masyarakat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'judul_pengabdian', 'tgl_pengabdian', 'lokasi', 'penjelasan'], 'required'],
            [['pegawai_id'], 'integer'],
            [['tgl_pengabdian'], 'safe'],
            [['judul_pengabdian', 'lokasi', 'mitra', 'mahasiswa_terlibat', 'penjelasan'], 'string', 'max' => 45],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['pegawai_id' => 'id_pegawai']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengabdian' => 'Id Pengabdian',
            'pegawai_id' => 'Dosen ID',
            'judul_pengabdian' => 'Judul Pengabdian',
            'tgl_pengabdian' => 'Tgl Pengabdian',
            'lokasi' => 'Lokasi',
            'mitra' => 'Mitra',
            'mahasiswa_terlibat' => 'Mahasiswa Terlibat',
            'penjelasan' => 'Penjelasan',
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
