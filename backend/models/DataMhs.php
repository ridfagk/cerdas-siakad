<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id_mahasiswa
 * @property string $nim
 * @property string $nama_mahasiswa
 * @property string $no_telp
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $agama
 * @property string $jenis_kelamin
 * @property string $email
 * @property string $tgl_masuk
 * @property string $prodi_id
 * @property string $angkatan
 * @property string $status_akademis
 * @property string|null $foto
 *
 * @property AlamatMhs[] $alamatMhs
 * @property Cuti[] $cutis
 * @property EvaluasiTkm[] $evaluasiTkms
 * @property KegiatanMhs[] $kegiatanMhs
 * @property Krs[] $krs
 * @property Nilai[] $nilais
 * @property OrtuMhs[] $ortuMhs
 * @property Partisipasi[] $partisipasis
 * @property Presensi[] $presensis
 * @property RiwayatPendMhs[] $riwayatPendMhs
 * @property RiwayatSehatMhs[] $riwayatSehatMhs
 * @property Skpi[] $skpis
 * @property WaliMhs[] $waliMhs
 */
class DataMhs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'nim', 'nama_mahasiswa', 'no_telp', 'tempat_lahir', 'tgl_lahir', 'agama', 'jenis_kelamin', 'email', 'tgl_masuk', 'prodi_id', 'angkatan', 'status_akademis'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['foto'], 'string'],
            [['nim', 'nama_mahasiswa', 'no_telp', 'tempat_lahir', 'agama', 'jenis_kelamin', 'email', 'tgl_masuk', 'prodi_id', 'angkatan'], 'string', 'max' => 45],
            [['status_akademis'], 'string', 'max' => 15],
            [['nim'], 'unique'],
            [['id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mahasiswa' => 'Id Mahasiswa',
            'nim' => 'Nim',
            'nama_mahasiswa' => 'Nama Mahasiswa',
            'no_telp' => 'No Telp',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'agama' => 'Agama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'email' => 'Email',
            'tgl_masuk' => 'Tgl Masuk',
            'prodi_id' => 'Prodi ID',
            'angkatan' => 'Angkatan',
            'status_akademis' => 'Status Akademis',
            'foto' => 'Foto',
        ];
    }

    /**
     * Gets query for [[AlamatMhs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlamatMhs()
    {
        return $this->hasMany(AlamatMhs::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[Cutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCutis()
    {
        return $this->hasMany(Cuti::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[EvaluasiTkms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluasiTkms()
    {
        return $this->hasMany(EvaluasiTkm::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[KegiatanMhs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKegiatanMhs()
    {
        return $this->hasMany(KegiatanMhs::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[Krs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKrs()
    {
        return $this->hasMany(Krs::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[Nilais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[OrtuMhs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrtuMhs()
    {
        return $this->hasMany(OrtuMhs::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[Partisipasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPartisipasis()
    {
        return $this->hasMany(Partisipasi::class, ['mahasiswa_id' => 'nim']);
    }

    /**
     * Gets query for [[Presensis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPresensis()
    {
        return $this->hasMany(Presensi::class, ['mahasiswa_id' => 'nim']);
    }

    /**
     * Gets query for [[RiwayatPendMhs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPendMhs()
    {
        return $this->hasMany(RiwayatPendMhs::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[RiwayatSehatMhs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatSehatMhs()
    {
        return $this->hasMany(RiwayatSehatMhs::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[Skpis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSkpis()
    {
        return $this->hasMany(Skpi::class, ['nim' => 'nim']);
    }

    /**
     * Gets query for [[WaliMhs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWaliMhs()
    {
        return $this->hasMany(WaliMhs::class, ['nim' => 'nim']);
    }
}
