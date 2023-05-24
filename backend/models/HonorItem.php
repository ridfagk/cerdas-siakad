<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "honor_item".
 *
 * @property int $id_itemhnr
 * @property int $honor_id
 * @property string $matkul_id
 * @property string $honor
 *
 * @property Honor $honor0
 */
class HonorItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'honor_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'matkul_id', 'honor'], 'required'],
            [['id_itemhnr', 'honor_id'], 'integer'],
            [['matkul_id', 'honor'], 'string', 'max' => 45],
            [['id_itemhnr'], 'unique'],
            [['honor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Honor::class, 'targetAttribute' => ['honor_id' => 'id_honor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_itemhnr' => 'Id Itemhnr',
            'honor_id' => 'Honor ID',
            'matkul_id' => 'Matkul ID',
            'honor' => 'Honor',
        ];
    }

    /**
     * Gets query for [[Honor0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHonor0()
    {
        return $this->hasOne(Honor::class, ['id_honor' => 'honor_id']);
    }
}
