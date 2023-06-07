<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "riwayat_pend_mhs".
 *
 * @property int $id_rwypend
 * @property string $nim
 * @property string $jenjang
 * @property string $nama_sekolah
 * @property string $jurusan
 *
 * @property Mahasiswa $nim0
 */
class MhsRiwayatPend extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_pend_mhs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'jenjang', 'nama_sekolah', 'jurusan'], 'required'],
            [['nim', 'jenjang', 'nama_sekolah', 'jurusan'], 'string', 'max' => 45],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => DataMhs::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rwypend' => 'Id Rwypend',
            'nim' => 'Nim',
            'jenjang' => 'Jenjang',
            'nama_sekolah' => 'Nama Sekolah',
            'jurusan' => 'Jurusan',
        ];
    }

    /**
     * Gets query for [[Nim0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(DataMhs::class, ['nim' => 'nim']);
    }
}
