<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengumuman".
 *
 * @property int $id_pengumuman
 * @property string $judul
 * @property string $isi
 * @property string $jenis_user
 */
class Pengumuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengumuman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengumuman', 'judul', 'isi', 'jenis_user'], 'required'],
            [['id_pengumuman'], 'integer'],
            [['judul', 'isi', 'jenis_user'], 'string', 'max' => 45],
            [['id_pengumuman'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengumuman' => 'Id Pengumuman',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'jenis_user' => 'Jenis User',
        ];
    }
}
