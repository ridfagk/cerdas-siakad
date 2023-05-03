<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kegiatan_mhs".
 *
 * @property int $id_kegmhs
 * @property string $nim
 * @property string $prodi_id
 * @property string $jenis_kegiatan
 * @property string $nama_kegiatan
 * @property string $penyelenggara
 * @property string $waktu_kegiatan
 * @property string $penjelasan
 * @property string $sertifikat
 *
 * @property Mahasiswa $nim0
 */
class MhsKegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kegiatan_mhs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kegmhs', 'nim', 'prodi_id', 'jenis_kegiatan', 'nama_kegiatan', 'penyelenggara', 'waktu_kegiatan', 'penjelasan', 'sertifikat'], 'required'],
            [['id_kegmhs'], 'integer'],
            [['nim', 'prodi_id', 'jenis_kegiatan', 'nama_kegiatan', 'penyelenggara', 'waktu_kegiatan', 'penjelasan', 'sertifikat'], 'string', 'max' => 45],
            [['id_kegmhs'], 'unique'],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kegmhs' => 'Id Kegmhs',
            'nim' => 'Nim',
            'prodi_id' => 'Prodi ID',
            'jenis_kegiatan' => 'Jenis Kegiatan',
            'nama_kegiatan' => 'Nama Kegiatan',
            'penyelenggara' => 'Penyelenggara',
            'waktu_kegiatan' => 'Waktu Kegiatan',
            'penjelasan' => 'Penjelasan',
            'sertifikat' => 'Sertifikat',
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
