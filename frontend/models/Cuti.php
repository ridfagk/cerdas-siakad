<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cuti".
 *
 * @property int $id_cuti
 * @property string $nim
 * @property string $tgl_pengajuan
 * @property string $semester
 * @property string $tahun_akademik
 * @property string $alasan_cuti
 * @property string|null $approval
 *
 * @property Mahasiswa $nim0
 */
class Cuti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'tgl_pengajuan', 'semester', 'tahun_akademik', 'alasan_cuti'], 'required'],
            [['tgl_pengajuan'], 'safe'],
            [['nim', 'semester', 'tahun_akademik', 'approval'], 'string', 'max' => 45],
            [['alasan_cuti'], 'string', 'max' => 250],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::class, 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cuti' => 'Id Cuti',
            'nim' => 'Nim',
            'tgl_pengajuan' => 'Tgl Pengajuan',
            'semester' => 'Semester',
            'tahun_akademik' => 'Tahun Akademik',
            'alasan_cuti' => 'Alasan Cuti',
            'approval' => 'Approval',
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
