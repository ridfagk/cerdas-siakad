<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "template_surat".
 *
 * @property int $id_surat
 * @property string $nama_surat
 * @property string $file
 */
class DataTemplateSurat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_surat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'nama_surat', 'file'], 'required'],
            [['id_surat'], 'integer'],
            [['nama_surat', 'file'], 'string', 'max' => 45],
            [['id_surat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_surat' => 'Id Surat',
            'nama_surat' => 'Nama Surat',
            'file' => 'File',
        ];
    }
}
