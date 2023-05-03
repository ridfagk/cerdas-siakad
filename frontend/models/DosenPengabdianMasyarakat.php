<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengabdian_masyarakat".
 *
 * @property int $id_pengabdian
 * @property int $dosen_id
 * @property string $judul_pengabdian
 * @property string $tgl_pengabdian
 * @property string $lokasi
 * @property string|null $mitra
 * @property string|null $mahasiswa_terlibat
 * @property string $penjelasan
 *
 * @property Dosen $dosen
 */
class DosenPengabdianMasyarakat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengabdian_masyarakat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dosen_id', 'judul_pengabdian', 'tgl_pengabdian', 'lokasi', 'penjelasan'], 'required'],
            [['dosen_id'], 'integer'],
            [['tgl_pengabdian'], 'safe'],
            [['judul_pengabdian', 'lokasi', 'mitra', 'mahasiswa_terlibat', 'penjelasan'], 'string', 'max' => 45],
            [['dosen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::class, 'targetAttribute' => ['dosen_id' => 'id_dosen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengabdian' => 'Id Pengabdian',
            'dosen_id' => 'Dosen ID',
            'judul_pengabdian' => 'Judul Pengabdian',
            'tgl_pengabdian' => 'Tgl Pengabdian',
            'lokasi' => 'Lokasi',
            'mitra' => 'Mitra',
            'mahasiswa_terlibat' => 'Mahasiswa Terlibat',
            'penjelasan' => 'Penjelasan',
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
