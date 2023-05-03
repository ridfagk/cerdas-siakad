<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property int $id_nilai
 * @property string $nim
 * @property int $kelas_id
 * @property string $matkul_id
 * @property string $sks
 * @property string $thn_akademik
 * @property string $semester
 * @property string $nilai_uts
 * @property string $nilai_uas
 * @property string $nilai_tugas
 * @property string $nilai_keaktifan
 * @property string $total_nilai
 * @property string|null $nilai_angka
 * @property string|null $nilai_huruf
 *
 * @property KelasKuliah $kelas
 * @property Mahasiswa $nim0
 */
class MhsNilai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_nilai', 'nim', 'kelas_id', 'matkul_id', 'sks', 'thn_akademik', 'semester', 'nilai_uts', 'nilai_uas', 'nilai_tugas', 'nilai_keaktifan', 'total_nilai'], 'required'],
            [['id_nilai', 'kelas_id'], 'integer'],
            [['nim', 'matkul_id', 'sks', 'thn_akademik', 'semester', 'nilai_uts', 'nilai_uas', 'nilai_tugas', 'nilai_keaktifan', 'total_nilai'], 'string', 'max' => 45],
            [['nilai_angka', 'nilai_huruf'], 'string', 'max' => 5],
            [['id_nilai'], 'unique'],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelasKuliah::class, 'targetAttribute' => ['kelas_id' => 'id_kelas']],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_nilai' => 'Id Nilai',
            'nim' => 'Nim',
            'kelas_id' => 'Kelas ID',
            'matkul_id' => 'Matkul ID',
            'sks' => 'Sks',
            'thn_akademik' => 'Thn Akademik',
            'semester' => 'Semester',
            'nilai_uts' => 'Nilai Uts',
            'nilai_uas' => 'Nilai Uas',
            'nilai_tugas' => 'Nilai Tugas',
            'nilai_keaktifan' => 'Nilai Keaktifan',
            'total_nilai' => 'Total Nilai',
            'nilai_angka' => 'Nilai Angka',
            'nilai_huruf' => 'Nilai Huruf',
        ];
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
