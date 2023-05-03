<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "partisipasi".
 *
 * @property int $id_presensi
 * @property string $mahasiswa_id
 * @property int $kelas_id
 * @property string $tahun_ajar
 * @property string $semester
 * @property string $matkul_id
 * @property string $p1
 * @property string $p2
 * @property string $p3
 * @property string $p4
 * @property string $p5
 * @property string $p6
 * @property string $p7
 * @property string $p8
 * @property string $p9
 * @property string $p10
 * @property string $p11
 * @property string $p12
 * @property string $p13
 * @property string $p14
 *
 * @property KelasKuliah $kelas
 * @property Mahasiswa $mahasiswa
 */
class MhsPartisipasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partisipasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_presensi', 'mahasiswa_id', 'kelas_id', 'tahun_ajar', 'semester', 'matkul_id', 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p11', 'p12', 'p13', 'p14'], 'required'],
            [['id_presensi', 'kelas_id'], 'integer'],
            [['mahasiswa_id', 'tahun_ajar', 'semester', 'matkul_id'], 'string', 'max' => 45],
            [['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p11', 'p12', 'p13', 'p14'], 'string', 'max' => 5],
            [['id_presensi'], 'unique'],
            [['mahasiswa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['mahasiswa_id' => 'nim']],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelasKuliah::class, 'targetAttribute' => ['kelas_id' => 'id_kelas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_presensi' => 'Id Presensi',
            'mahasiswa_id' => 'Mahasiswa ID',
            'kelas_id' => 'Kelas ID',
            'tahun_ajar' => 'Tahun Ajar',
            'semester' => 'Semester',
            'matkul_id' => 'Matkul ID',
            'p1' => 'P1',
            'p2' => 'P2',
            'p3' => 'P3',
            'p4' => 'P4',
            'p5' => 'P5',
            'p6' => 'P6',
            'p7' => 'P7',
            'p8' => 'P8',
            'p9' => 'P9',
            'p10' => 'P10',
            'p11' => 'P11',
            'p12' => 'P12',
            'p13' => 'P13',
            'p14' => 'P14',
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
     * Gets query for [[Mahasiswa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, ['nim' => 'mahasiswa_id']);
    }
}
