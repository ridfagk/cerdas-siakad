<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "evaluasi_matkul".
 *
 * @property int $id_evalmk
 * @property int $kelas_id
 * @property string $matkul_id
 * @property string $nim
 * @property string $tahun_akademik
 * @property string $semester
 * @property string $prodi
 * @property string $pertanyaan1
 * @property string $pertanyaan2
 * @property string $pertanyaan3
 * @property string $pertanyaan4
 * @property string $pertanyaan5
 * @property string $total_point
 *
 * @property KelasKuliah $kelas
 */
class EvalMatkul extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evaluasi_matkul';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kelas_id', 'matkul_id', 'nim', 'tahun_akademik', 'semester', 'prodi', 'pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'total_point'], 'required'],
            [['kelas_id'], 'integer'],
            [['matkul_id', 'nim', 'tahun_akademik', 'semester', 'prodi'], 'string', 'max' => 45],
            [['pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'total_point'], 'string', 'max' => 5],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelasKuliah::class, 'targetAttribute' => ['kelas_id' => 'id_kelas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_evalmk' => 'Id Evalmk',
            'kelas_id' => 'Kelas ID',
            'matkul_id' => 'Matkul ID',
            'nim' => 'Nim',
            'tahun_akademik' => 'Tahun Akademik',
            'semester' => 'Semester',
            'prodi' => 'Prodi',
            'pertanyaan1' => 'Pertanyaan1',
            'pertanyaan2' => 'Pertanyaan2',
            'pertanyaan3' => 'Pertanyaan3',
            'pertanyaan4' => 'Pertanyaan4',
            'pertanyaan5' => 'Pertanyaan5',
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
