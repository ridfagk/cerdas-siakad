<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "evaluasi_dosen".
 *
 * @property int $id_evaldsn
 * @property string $dosen_id
 * @property string $nidn
 * @property string $nim
 * @property string $tahun_akademik
 * @property string $semester
 * @property string $prodi
 * @property int $kelas_id
 * @property string $matkul_id
 * @property string $pertanyaan1
 * @property string $pertanyaan2
 * @property string $pertanyaan3
 * @property string $pertanyaan4
 * @property string $pertanyaan5
 * @property string $pertanyaan6
 * @property string $pertanyaan7
 * @property string $pertanyaan8
 * @property string $pertanyaan9
 * @property string $pertanyaan10
 * @property string $saran
 * @property string $total_point
 *
 * @property KelasKuliah $kelas
 */
class EvalDosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evaluasi_dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dosen_id', 'nidn', 'nim', 'tahun_akademik', 'semester', 'prodi', 'kelas_id', 'matkul_id', 'pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'pertanyaan6', 'pertanyaan7', 'pertanyaan8', 'pertanyaan9', 'pertanyaan10', 'saran', 'total_point'], 'required'],
            [['kelas_id'], 'integer'],
            [['dosen_id', 'nidn', 'nim'], 'string', 'max' => 15],
            [['tahun_akademik', 'semester', 'prodi', 'matkul_id'], 'string', 'max' => 45],
            [['pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'pertanyaan6', 'pertanyaan7', 'pertanyaan8', 'pertanyaan9', 'pertanyaan10', 'total_point'], 'string', 'max' => 5],
            [['saran'], 'string', 'max' => 250],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelasKuliah::class, 'targetAttribute' => ['kelas_id' => 'id_kelas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_evaldsn' => 'Id Evaldsn',
            'dosen_id' => 'Dosen ID',
            'nidn' => 'Nidn',
            'nim' => 'Nim',
            'tahun_akademik' => 'Tahun Akademik',
            'semester' => 'Semester',
            'prodi' => 'Prodi',
            'kelas_id' => 'Kelas ID',
            'matkul_id' => 'Matkul ID',
            'pertanyaan1' => 'Pertanyaan1',
            'pertanyaan2' => 'Pertanyaan2',
            'pertanyaan3' => 'Pertanyaan3',
            'pertanyaan4' => 'Pertanyaan4',
            'pertanyaan5' => 'Pertanyaan5',
            'pertanyaan6' => 'Pertanyaan6',
            'pertanyaan7' => 'Pertanyaan7',
            'pertanyaan8' => 'Pertanyaan8',
            'pertanyaan9' => 'Pertanyaan9',
            'pertanyaan10' => 'Pertanyaan10',
            'saran' => 'Saran',
            'total_point' => 'Total Point',
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
}
