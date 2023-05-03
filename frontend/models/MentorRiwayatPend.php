<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "riwayat_pend_mentor".
 *
 * @property int $id_rwytdosen
 * @property int $dosen_id
 * @property string $jenjang_pendidikan
 * @property string $nama_institusi
 * @property string $prodi
 * @property string $waktu_pendidikan
 *
 * @property Dosen $dosen
 */
class MentorRiwayatPend extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_pend_mentor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rwytdosen', 'dosen_id', 'jenjang_pendidikan', 'nama_institusi', 'prodi', 'waktu_pendidikan'], 'required'],
            [['id_rwytdosen', 'dosen_id'], 'integer'],
            [['jenjang_pendidikan', 'nama_institusi', 'prodi', 'waktu_pendidikan'], 'string', 'max' => 45],
            [['id_rwytdosen'], 'unique'],
            [['dosen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::class, 'targetAttribute' => ['dosen_id' => 'id_dosen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rwytdosen' => 'Id Rwytdosen',
            'dosen_id' => 'Dosen ID',
            'jenjang_pendidikan' => 'Jenjang Pendidikan',
            'nama_institusi' => 'Nama Institusi',
            'prodi' => 'Prodi',
            'waktu_pendidikan' => 'Waktu Pendidikan',
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
}
