<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "presensi".
 *
 * @property int $id_presensi
 * @property string $mahasiswa_id
 * @property string $matkul_id
 * @property string $tahun_ajar
 * @property string $semester
 * @property int $kelas_id
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
 * @property string $uts
 * @property string $uas
 *
 * @property KelasKuliah $kelas
 * @property Mahasiswa $mahasiswa
 */
class MhsPresensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'presensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'mahasiswa_id', 'matkul_id', 'tahun_ajar', 'semester', 'kelas_id'], 'required'],
            [['id_presensi', 'kelas_id'], 'integer'],
            [['mahasiswa_id', 'matkul_id', 'tahun_ajar', 'semester'], 'string', 'max' => 45],
            [['p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p11', 'p12', 'p13', 'p14', 'uts', 'uas'], 'string', 'max' => 5],
            [['id_presensi'], 'unique'],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelasKuliah::class, 'targetAttribute' => ['kelas_id' => 'id_kelas']],
            [['mahasiswa_id'], 'exist', 'skipOnError' => true, 'targetClass' => DataMhs::class, 'targetAttribute' => ['mahasiswa_id' => 'nim']],
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
            'matkul_id' => 'Matkul ID',
            'tahun_ajar' => 'Tahun Ajar',
            'semester' => 'Semester',
            'kelas_id' => 'Kelas ID',
            'p1' => '',
            'p2' => '',
            'p3' => '',
            'p4' => '',
            'p5' => '',
            'p6' => '',
            'p7' => '',
            'p8' => '',
            'p9' => '',
            'p10' => '',
            'p11' => '',
            'p12' => '',
            'p13' => '',
            'p14' => '',
            'uts' => '',
            'uas' => '',
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
        return $this->hasOne(DataMhs::class, ['nim' => 'mahasiswa_id']);
    }
}
