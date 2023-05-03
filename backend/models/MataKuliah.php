<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mata_kuliah".
 *
 * @property int $id_matkul
 * @property string $kd_matkul
 * @property string $nama_matkul
 * @property int $sks
 * @property string $semester
 * @property int $porsi_uts
 * @property int $porsi_uas
 * @property int $porsi_tugas
 * @property int $porsi_keaktifan
 *
 * @property KelasKuliah[] $kelasKuliahs
 */
class MataKuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mata_kuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_matkul', 'kd_matkul', 'nama_matkul', 'sks', 'semester', 'porsi_uts', 'porsi_uas', 'porsi_tugas', 'porsi_keaktifan'], 'required'],
            [['id_matkul', 'sks', 'porsi_uts', 'porsi_uas', 'porsi_tugas', 'porsi_keaktifan'], 'integer'],
            [['kd_matkul'], 'string', 'max' => 25],
            [['nama_matkul'], 'string', 'max' => 250],
            [['semester'], 'string', 'max' => 45],
            [['kd_matkul'], 'unique'],
            [['id_matkul'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_matkul' => 'Id Matkul',
            'kd_matkul' => 'Kd Matkul',
            'nama_matkul' => 'Nama Matkul',
            'sks' => 'Sks',
            'semester' => 'Semester',
            'porsi_uts' => 'Porsi Uts',
            'porsi_uas' => 'Porsi Uas',
            'porsi_tugas' => 'Porsi Tugas',
            'porsi_keaktifan' => 'Porsi Keaktifan',
        ];
    }

    /**
     * Gets query for [[KelasKuliahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKelasKuliahs()
    {
        return $this->hasMany(KelasKuliah::class, ['matkul_id' => 'kd_matkul']);
    }
}
