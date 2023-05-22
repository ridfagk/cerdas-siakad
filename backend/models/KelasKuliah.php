<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelas_kuliah".
 *
 * @property int $id_kelas
 * @property string $nama_kelas
 * @property string $thn_akademik
 * @property string $semester
 * @property int $sks
 * @property string $hari
 * @property string $jam
 * @property string $matkul_id
 * @property string $prodi_id
 *
 * @property EvaluasiDosen[] $evaluasiDosens
 * @property EvaluasiMatkul[] $evaluasiMatkuls
 * @property KelasKrs[] $kelasKrs
 * @property MataKuliah $matkul
 * @property Nilai[] $nilais
 * @property Partisipasi[] $partisipasis
 * @property Presensi[] $presensis
 * @property Prodi $prodi
 * @property TimKelasKuliah[] $timKelasKuliahs
 */
class KelasKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas_kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kelas', 'thn_akademik', 'semester', 'sks', 'hari', 'matkul_id', 'prodi_id'], 'required'],
            [['id_kelas', 'sks'], 'integer'],
            [['jam_mulai', 'jam_akhir', 'tgl_mulai', 'tgl_akhir'], 'safe'],
            [['nama_kelas'], 'string', 'max' => 10],
            [['thn_akademik', 'semester', 'matkul_id', 'prodi_id'], 'string', 'max' => 15],
            [['hari'], 'string', 'max' => 20],
            [['id_kelas'], 'unique'],
            [['matkul_id'], 'exist', 'skipOnError' => true, 'targetClass' => MataKuliah::class, 'targetAttribute' => ['matkul_id' => 'kd_matkul']],
            [['prodi_id'], 'exist', 'skipOnError' => true, 'targetClass' => DataProdi::class, 'targetAttribute' => ['prodi_id' => 'kd_prodi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kelas' => 'Id Kelas',
            'nama_kelas' => 'Nama Kelas',
            'thn_akademik' => 'Thn Akademik',
            'semester' => 'Semester',
            'sks' => 'Sks',
            'hari' => 'Hari',
            'jam' => 'Jam',
            'matkul_id' => 'Matkul ID',
            'prodi_id' => 'Prodi ID',
        ];
    }

    /**
     * Gets query for [[EvaluasiDosens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluasiDosens()
    {
        return $this->hasMany(EvaluasiDosen::class, ['kelas_id' => 'id_kelas']);
    }

    /**
     * Gets query for [[EvaluasiMatkuls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluasiMatkuls()
    {
        return $this->hasMany(EvaluasiMatkul::class, ['kelas_id' => 'id_kelas']);
    }

    /**
     * Gets query for [[KelasKrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelasKrs()
    {
        return $this->hasMany(KelasKrs::class, ['kelas_id' => 'id_kelas']);
    }

    /**
     * Gets query for [[Matkul]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMatkul()
    {
        return $this->hasOne(MataKuliah::class, ['kd_matkul' => 'matkul_id']);
    }

    /**
     * Gets query for [[Nilais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNilais()
    {
        return $this->hasMany(Nilai::class, ['kelas_id' => 'id_kelas']);
    }

    /**
     * Gets query for [[Partisipasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPartisipasis()
    {
        return $this->hasMany(Partisipasi::class, ['kelas_id' => 'id_kelas']);
    }

    /**
     * Gets query for [[Presensis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPresensis()
    {
        return $this->hasMany(Presensi::class, ['kelas_id' => 'id_kelas']);
    }

    /**
     * Gets query for [[Prodi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(DataProdi::class, ['kd_prodi' => 'prodi_id']);
    }

    /**
     * Gets query for [[TimKelasKuliahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimKelasKuliahs()
    {
        return $this->hasMany(TimKelasKuliah::class, ['kelas_id' => 'id_kelas']);
    }

    /**
     * Gets query for [[TimKelasKuliahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDosen()
    {
        return $this->hasOne(Pegawai::class, ['id_pegawai' => 'pegawai_id']);
    }
}
