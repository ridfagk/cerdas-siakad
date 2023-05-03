<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "evaluasi_tkm".
 *
 * @property int $id_evaldsn
 * @property string $nim
 * @property string $tahun_akademik
 * @property string $semester
 * @property string $prodi
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
 * @property string $pertanyaan11
 * @property string $pertanyaan12
 * @property string $pertanyaan13
 * @property string $pertanyaan14
 * @property string $pertanyaan15
 * @property string $pertanyaan16
 * @property string $pertanyaan17
 * @property string $pertanyaan18
 * @property string $pertanyaan19
 * @property string $pertanyaan20
 * @property string $pertanyaan21
 * @property string $pertanyaan22
 * @property string $pertanyaan23
 * @property string $pertanyaan24
 * @property string $pertanyaan25
 * @property string $saran
 * @property string $total_point
 *
 * @property Mahasiswa $nim0
 */
class EvalTKM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'evaluasi_tkm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'tahun_akademik', 'semester', 'prodi', 'pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'pertanyaan6', 'pertanyaan7', 'pertanyaan8', 'pertanyaan9', 'pertanyaan10', 'pertanyaan11', 'pertanyaan12', 'pertanyaan13', 'pertanyaan14', 'pertanyaan15', 'pertanyaan16', 'pertanyaan17', 'pertanyaan18', 'pertanyaan19', 'pertanyaan20', 'pertanyaan21', 'pertanyaan22', 'pertanyaan23', 'pertanyaan24', 'pertanyaan25', 'saran', 'total_point'], 'required'],
            [['nim', 'tahun_akademik', 'semester', 'prodi'], 'string', 'max' => 45],
            [['pertanyaan1', 'pertanyaan2', 'pertanyaan3', 'pertanyaan4', 'pertanyaan5', 'pertanyaan6', 'pertanyaan7', 'pertanyaan8', 'pertanyaan9', 'pertanyaan10', 'pertanyaan11', 'pertanyaan12', 'pertanyaan13', 'pertanyaan14', 'pertanyaan15', 'pertanyaan16', 'pertanyaan17', 'pertanyaan18', 'pertanyaan19', 'pertanyaan20', 'pertanyaan21', 'pertanyaan22', 'pertanyaan23', 'pertanyaan24', 'pertanyaan25', 'total_point'], 'string', 'max' => 5],
            [['saran'], 'string', 'max' => 250],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_evaldsn' => 'Id Evaldsn',
            'nim' => 'Nim',
            'tahun_akademik' => 'Tahun Akademik',
            'semester' => 'Semester',
            'prodi' => 'Prodi',
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
            'pertanyaan11' => 'Pertanyaan11',
            'pertanyaan12' => 'Pertanyaan12',
            'pertanyaan13' => 'Pertanyaan13',
            'pertanyaan14' => 'Pertanyaan14',
            'pertanyaan15' => 'Pertanyaan15',
            'pertanyaan16' => 'Pertanyaan16',
            'pertanyaan17' => 'Pertanyaan17',
            'pertanyaan18' => 'Pertanyaan18',
            'pertanyaan19' => 'Pertanyaan19',
            'pertanyaan20' => 'Pertanyaan20',
            'pertanyaan21' => 'Pertanyaan21',
            'pertanyaan22' => 'Pertanyaan22',
            'pertanyaan23' => 'Pertanyaan23',
            'pertanyaan24' => 'Pertanyaan24',
            'pertanyaan25' => 'Pertanyaan25',
            'saran' => 'Saran',
            'total_point' => 'Total Point',
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
