<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nip
 * @property int $nidn
 * @property string $nama_pegawai
 * @property string $alamat_pegawai
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
 * @property Honor[] $honors
 * @property PengabdianMasyarakat[] $pengabdianMasyarakats
 * @property ResearchInterest[] $researchInterests
 * @property RiwayatPendPegawai[] $riwayatPendPegawais
 * @property TimKelasKuliah[] $timKelasKuliahs
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip',  'nama_pegawai', 'alamat_pegawai', 'no_telp', 'tempat_lahir', 'tgl_lahir', 'agama', 'jenis_kelamin', 'email', 'tgl_masuk', 'jabatan', 'pendidikan_akhir', 'status_ikatankerja', 'status_aktif'], 'required'],
            [['nidn', 'no_telp'], 'integer'],
            [['alamat_pegawai', 'foto'], 'string'],
            [['tgl_lahir', 'tgl_masuk'], 'safe'],
            [['nip'], 'string', 'max' => 16],
            [['nama_pegawai'], 'string', 'max' => 150],
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
            'id_pegawai' => 'Id Pegawai',
            'nip' => 'Nip',
            'nidn' => 'Nidn',
            'nama_pegawai' => 'Nama Pegawai',
            'alamat_pegawai' => 'Alamat Pegawai',
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
     * Gets query for [[Honors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHonors()
    {
        return $this->hasMany(Honor::class, ['pegawai_id' => 'id_pegawai']);
    }

    /**
     * Gets query for [[PengabdianMasyarakats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengabdianMasyarakats()
    {
        return $this->hasMany(PengabdianMasyarakat::class, ['pegawai_id' => 'id_pegawai']);
    }

    /**
     * Gets query for [[ResearchInterests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResearchInterests()
    {
        return $this->hasMany(ResearchInterest::class, ['pegawai_id' => 'id_pegawai']);
    }

    /**
     * Gets query for [[RiwayatPendPegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPendPegawais()
    {
        return $this->hasMany(RiwayatPendPegawai::class, ['pegawai_id' => 'id_pegawai']);
    }

    /**
     * Gets query for [[TimKelasKuliahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimKelasKuliahs()
    {
        return $this->hasMany(TimKelasKuliah::class, ['pegawai_id' => 'id_pegawai']);
    }
}
