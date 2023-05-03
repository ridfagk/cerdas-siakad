<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "staff_pt".
 *
 * @property int $id_staff
 * @property string $kd_staff
 * @property string $nama_staff
 * @property string $alamat_staff
 * @property string $no_telp
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $email
 * @property string $tgl_masuk
 * @property string $pendidikan_akhir
 * @property string $jabatan
 * @property string $agama
 * @property string $jenis_kelamin
 */
class DataStaffPT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_pt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_staff', 'kd_staff', 'nama_staff', 'alamat_staff', 'no_telp', 'tempat_lahir', 'tgl_lahir', 'email', 'tgl_masuk', 'pendidikan_akhir', 'jabatan', 'agama', 'jenis_kelamin'], 'required'],
            [['id_staff'], 'integer'],
            [['alamat_staff'], 'string'],
            [['tgl_lahir', 'tgl_masuk'], 'safe'],
            [['kd_staff'], 'string', 'max' => 15],
            [['nama_staff', 'no_telp', 'tempat_lahir', 'email', 'pendidikan_akhir', 'jabatan'], 'string', 'max' => 45],
            [['agama', 'jenis_kelamin'], 'string', 'max' => 20],
            [['id_staff'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_staff' => 'Id Staff',
            'kd_staff' => 'Kd Staff',
            'nama_staff' => 'Nama Staff',
            'alamat_staff' => 'Alamat Staff',
            'no_telp' => 'No Telp',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'email' => 'Email',
            'tgl_masuk' => 'Tgl Masuk',
            'pendidikan_akhir' => 'Pendidikan Akhir',
            'jabatan' => 'Jabatan',
            'agama' => 'Agama',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }
}
