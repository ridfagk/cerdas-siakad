<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id_dosen
 * @property int $nidn
 * @property string $nama_dosen
 * @property string $alamat_dosen
 * @property int $no_telp
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
 * @property HonorDosen[] $honorDosens
 * @property PengabdianMasyarakat[] $pengabdianMasyarakats
 * @property ResearchInterest[] $researchInterests
 * @property RiwayatPendMentor[] $riwayatPendMentors
 * @property TimKelasKuliah[] $timKelasKuliahs
 */
class DataDosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nidn', 'nama_dosen', 'alamat_dosen', 'no_telp', 'tempat_lahir', 'tgl_lahir', 'agama', 'jenis_kelamin', 'email', 'tgl_masuk', 'jabatan', 'pendidikan_akhir', 'status_ikatankerja', 'status_aktif'], 'required'],
            [['nidn', 'no_telp'], 'integer'],
            [['alamat_dosen', 'foto'], 'string'],
            [['tgl_lahir', 'tgl_masuk'], 'safe'],
            [['nama_dosen'], 'string', 'max' => 150],
            [['tempat_lahir', 'agama', 'jenis_kelamin', 'email', 'jabatan', 'pendidikan_akhir', 'status_ikatankerja', 'status_aktif'], 'string', 'max' => 45],
            [['nidn'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dosen' => 'Id Dosen',
            'nidn' => 'Nidn',
            'nama_dosen' => 'Nama Dosen',
            'alamat_dosen' => 'Alamat Dosen',
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
     * Gets query for [[HonorDosens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHonorDosens()
    {
        return $this->hasMany(HonorDosen::class, ['dosen_id' => 'id_dosen']);
    }

    /**
     * Gets query for [[PengabdianMasyarakats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengabdianMasyarakats()
    {
        return $this->hasMany(PengabdianMasyarakat::class, ['dosen_id' => 'id_dosen']);
    }

    /**
     * Gets query for [[ResearchInterests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResearchInterests()
    {
        return $this->hasMany(ResearchInterest::class, ['dosen_id' => 'id_dosen']);
    }

    /**
     * Gets query for [[RiwayatPendMentors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPendMentors()
    {
        return $this->hasMany(RiwayatPendMentor::class, ['dosen_id' => 'id_dosen']);
    }

    /**
     * Gets query for [[TimKelasKuliahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimKelasKuliahs()
    {
        return $this->hasMany(TimKelasKuliah::class, ['dosen_id' => 'id_dosen']);
    }
}
