<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mentor".
 *
 * @property int $id_mentor
 * @property string $nidn
 * @property string $nama_mentor
 * @property string $alamat_mentor
 * @property string $no_telp
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $agama
 * @property string $jenis_kelamin
 * @property string $email
 * @property string $tgl_masuk
 * @property string $jabatan
 * @property string $pendidikan_akhir
 * @property string $status_ikatankerja
 * @property string $status_aktif
 * @property string|null $foto
 *
 * @property HonorMentor[] $honorMentors
 * @property TimKelasKuliah[] $timKelasKuliahs
 */
class DataMentor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mentor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mentor', 'nidn', 'nama_mentor', 'alamat_mentor', 'no_telp', 'tempat_lahir', 'tgl_lahir', 'agama', 'jenis_kelamin', 'email', 'tgl_masuk', 'jabatan', 'pendidikan_akhir', 'status_ikatankerja', 'status_aktif'], 'required'],
            [['id_mentor'], 'integer'],
            [['tgl_lahir', 'tgl_masuk'], 'safe'],
            [['email'], 'string'],
            [['nidn', 'nama_mentor', 'alamat_mentor', 'no_telp', 'tempat_lahir', 'agama', 'jenis_kelamin', 'jabatan', 'pendidikan_akhir', 'status_ikatankerja', 'status_aktif', 'foto'], 'string', 'max' => 45],
            [['id_mentor'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mentor' => 'Id Mentor',
            'nidn' => 'Nidn',
            'nama_mentor' => 'Nama Mentor',
            'alamat_mentor' => 'Alamat Mentor',
            'no_telp' => 'No Telp',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'agama' => 'Agama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'email' => 'Email',
            'tgl_masuk' => 'Tgl Masuk',
            'jabatan' => 'Jabatan',
            'pendidikan_akhir' => 'Pendidikan Akhir',
            'status_ikatankerja' => 'Status Ikatankerja',
            'status_aktif' => 'Status Aktif',
            'foto' => 'Foto',
        ];
    }

    /**
     * Gets query for [[HonorMentors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHonorMentors()
    {
        return $this->hasMany(HonorMentor::class, ['mentor_id' => 'id_mentor']);
    }

    /**
     * Gets query for [[TimKelasKuliahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimKelasKuliahs()
    {
        return $this->hasMany(TimKelasKuliah::class, ['mentor_id' => 'id_mentor']);
    }
}
