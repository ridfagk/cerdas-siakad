<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "honor_mentor".
 *
 * @property int $id_honormntr
 * @property int $mentor_id
 * @property string $periode
 * @property string $total_honor
 *
 * @property HonorMentorItem[] $honorMentorItems
 * @property Mentor $mentor
 */
class HonorMentor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'honor_mentor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_honormntr', 'mentor_id', 'periode', 'total_honor'], 'required'],
            [['id_honormntr', 'mentor_id'], 'integer'],
            [['periode', 'total_honor'], 'string', 'max' => 45],
            [['id_honormntr'], 'unique'],
            [['mentor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mentor::class, 'targetAttribute' => ['mentor_id' => 'id_mentor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_honormntr' => 'Id Honormntr',
            'mentor_id' => 'Mentor ID',
            'periode' => 'Periode',
            'total_honor' => 'Total Honor',
        ];
    }

    /**
     * Gets query for [[HonorMentorItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHonorMentorItems()
    {
        return $this->hasMany(HonorMentorItem::class, ['honormntr_id' => 'id_honormntr']);
    }

    /**
     * Gets query for [[Mentor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMentor()
    {
        return $this->hasOne(Mentor::class, ['id_mentor' => 'mentor_id']);
    }
}
