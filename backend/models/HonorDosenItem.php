<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "honor_dosen_item".
 *
 * @property int $id_itemhnrdsn
 * @property int $honordsn_id
 * @property string $matkul_id
 * @property string $honor
 *
 * @property HonorDosen $honordsn
 */
class HonorDosenItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'honor_dosen_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_itemhnrdsn', 'honordsn_id', 'matkul_id', 'honor'], 'required'],
            [['id_itemhnrdsn', 'honordsn_id'], 'integer'],
            [['matkul_id', 'honor'], 'string', 'max' => 45],
            [['id_itemhnrdsn'], 'unique'],
            [['honordsn_id'], 'exist', 'skipOnError' => true, 'targetClass' => HonorDosen::class, 'targetAttribute' => ['honordsn_id' => 'id_honordsn']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_itemhnrdsn' => 'Id Itemhnrdsn',
            'honordsn_id' => 'Honordsn ID',
            'matkul_id' => 'Matkul ID',
            'honor' => 'Honor',
        ];
    }

    /**
     * Gets query for [[Honordsn]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHonordsn()
    {
        return $this->hasOne(HonorDosen::class, ['id_honordsn' => 'honordsn_id']);
    }
}
