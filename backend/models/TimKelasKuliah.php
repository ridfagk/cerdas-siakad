<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tim_kelas_kuliah".
 *
 * @property int $id_timkelas
 * @property int $kelas_id
 * @property string $thn_akademik
 * @property string $semester
 * @property int $dosen_id
 * @property int $mentor_id
 * @property string $matkul_id
 * @property string $nama_pengajar
 * @property string $status
 *
 * @property Dosen $dosen
 * @property KelasKuliah $kelas
 * @property Mentor $mentor
 */
class TimKelasKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tim_kelas_kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelas_id', 'thn_akademik', 'semester',  'matkul_id'], 'required'],
            [['id_timkelas', 'kelas_id', ], 'integer'],
            [['thn_akademik', 'semester', 'matkul_id', 'status'], 'string', 'max' => 45],
            [['nama_pengajar'], 'string', 'max' => 250],
            [['id_timkelas'], 'unique'],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelasKuliah::class, 'targetAttribute' => ['kelas_id' => 'id_kelas']],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['pegawai_id' => 'id_pegawai']],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_timkelas' => 'Id Timkelas',
            'kelas_id' => 'Kelas ID',
            'thn_akademik' => 'Thn Akademik',
            'semester' => 'Semester',
            'pegawai_id' => 'Pengajar/Mentor',
            'matkul_id' => 'Matkul ID',
            'nama_pengajar' => 'Nama Pengajar',
            'status' => 'Status',
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

    /**
     * Gets query for [[Kelas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(KelasKuliah::class, ['id_kelas' => 'kelas_id']);
    }

   
}
