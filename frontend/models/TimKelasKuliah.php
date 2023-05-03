<?php

namespace frontend\models;

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
            [['id_timkelas', 'kelas_id', 'thn_akademik', 'semester', 'dosen_id', 'mentor_id', 'matkul_id', 'nama_pengajar', 'status'], 'required'],
            [['id_timkelas', 'kelas_id', 'dosen_id', 'mentor_id'], 'integer'],
            [['thn_akademik', 'semester', 'matkul_id', 'status'], 'string', 'max' => 45],
            [['nama_pengajar'], 'string', 'max' => 250],
            [['id_timkelas'], 'unique'],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelasKuliah::class, 'targetAttribute' => ['kelas_id' => 'id_kelas']],
            [['dosen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::class, 'targetAttribute' => ['dosen_id' => 'id_dosen']],
            [['mentor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mentor::class, 'targetAttribute' => ['mentor_id' => 'id_mentor']],
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
            'dosen_id' => 'Dosen ID',
            'mentor_id' => 'Mentor ID',
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
    public function getDosen()
    {
        return $this->hasOne(Dosen::class, ['id_dosen' => 'dosen_id']);
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
     * Gets query for [[Mentor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMentor()
    {
        return $this->hasOne(Mentor::class, ['id_mentor' => 'mentor_id']);
    }
}
