<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "semester".
 *
 * @property int $id_semester
 * @property string $semester
 * @property string $nama_semester
 */
class DataSemester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'semester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_semester', 'semester', 'nama_semester'], 'required'],
            [['id_semester'], 'integer'],
            [['semester', 'nama_semester'], 'string', 'max' => 45],
            [['id_semester'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_semester' => 'Id Semester',
            'semester' => 'Semester',
            'nama_semester' => 'Nama Semester',
        ];
    }
}
