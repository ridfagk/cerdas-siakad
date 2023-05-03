<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tahun_akademik".
 *
 * @property int $id_thnakademik
 * @property string $thn_akademik
 * @property string|null $status
 */
class DataTA extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tahun_akademik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_thnakademik', 'thn_akademik'], 'required'],
            [['id_thnakademik'], 'integer'],
            [['thn_akademik', 'status'], 'string', 'max' => 45],
            [['id_thnakademik'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_thnakademik' => 'Id Thnakademik',
            'thn_akademik' => 'Thn Akademik',
            'status' => 'Status',
        ];
    }
}
