<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "honor_mentor_item".
 *
 * @property int $id_itemhnrmntr
 * @property int $honormntr_id
 * @property string $matkul_id
 * @property string $honor
 *
 * @property HonorMentor $honormntr
 */
class HonorMentorItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'honor_mentor_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_itemhnrmntr', 'honormntr_id', 'matkul_id', 'honor'], 'required'],
            [['id_itemhnrmntr', 'honormntr_id'], 'integer'],
            [['matkul_id', 'honor'], 'string', 'max' => 45],
            [['id_itemhnrmntr'], 'unique'],
            [['honormntr_id'], 'exist', 'skipOnError' => true, 'targetClass' => HonorMentor::class, 'targetAttribute' => ['honormntr_id' => 'id_honormntr']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_itemhnrmntr' => 'Id Itemhnrmntr',
            'honormntr_id' => 'Honormntr ID',
            'matkul_id' => 'Matkul ID',
            'honor' => 'Honor',
        ];
    }

    /**
     * Gets query for [[Honormntr]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHonormntr()
    {
        return $this->hasOne(HonorMentor::class, ['id_honormntr' => 'honormntr_id']);
    }
}
