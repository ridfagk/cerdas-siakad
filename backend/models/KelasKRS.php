<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelas_krs".
 *
 * @property int $id_mkkrs
 * @property string $nim
 * @property int $kelas_id
 * @property string $matkul_id
 * @property int $sks
 * @property string $semester
 * @property string $hari
 * @property string $jam_kuliah
 * @property string $dosen
 * @property int $krs_id
 *
 * @property KelasKuliah $kelas
 * @property Krs $krs
 */
class KelasKRS extends \yii\db\ActiveRecord
{
    use \mdm\behaviors\ar\RelationTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas_krs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mkkrs', 'nim', 'kelas_id', 'matkul_id', 'sks', 'semester', 'hari', 'dosen', 'krs_id'], 'required'],
            [['id_mkkrs', 'kelas_id', 'sks', 'krs_id'], 'integer'],
            [['jam_kuliah'], 'safe'],
            [['nim', 'matkul_id', 'semester', 'dosen'], 'string', 'max' => 45],
            [['hari'], 'string', 'max' => 15],
            [['id_mkkrs'], 'unique'],
            [['krs_id'], 'exist', 'skipOnError' => true, 'targetClass' => Krs::class, 'targetAttribute' => ['krs_id' => 'id_krs']],
            [['kelas_id'], 'exist', 'skipOnError' => true, 'targetClass' => KelasKuliah::class, 'targetAttribute' => ['kelas_id' => 'id_kelas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mkkrs' => 'Id Mkkrs',
            'nim' => 'Nim',
            'kelas_id' => 'Kelas ID',
            'matkul_id' => 'Matkul ID',
            'sks' => 'Sks',
            'semester' => 'Semester',
            'hari' => 'Hari',
            'jam_kuliah' => 'Jam Kuliah',
            'dosen' => 'Dosen',
            'krs_id' => 'Krs ID',
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
     * Gets query for [[Krs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKrs()
    {
        return $this->hasOne(Krs::class, ['id_krs' => 'krs_id']);
    }

    public function getMhs()
    {
        return $this->hasOne(DataMhs::class, ['nim' => 'nim']);
    }

    public function setOrderItems($value)
    {
        $this->loadRelated('orderItems', $value);
    }
}
