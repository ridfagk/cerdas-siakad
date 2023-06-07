<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sistem_penilaian".
 *
 * @property int $id_sistemnilai
 * @property int $nilai_min
 * @property int $nilai_max
 * @property float $nilai_mutu
 * @property string $nilai_huruf
 */
class SistemPenilaian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sistem_penilaian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nilai_min', 'nilai_max', 'nilai_mutu', 'nilai_huruf'], 'required'],
            [['nilai_min', 'nilai_max'], 'integer'],
            [['nilai_mutu'], 'number'],
            [['nilai_huruf'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sistemnilai' => 'Id Sistemnilai',
            'nilai_min' => 'Nilai Min',
            'nilai_max' => 'Nilai Max',
            'nilai_mutu' => 'Nilai Mutu',
            'nilai_huruf' => 'Nilai Huruf',
        ];
    }
}
