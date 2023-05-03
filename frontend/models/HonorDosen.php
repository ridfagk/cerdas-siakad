<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "honor_dosen".
 *
 * @property int $id_honordsn
 * @property int $dosen_id
 * @property string $periode
 * @property string $total_honor
 *
 * @property Dosen $dosen
 * @property HonorDosenItem[] $honorDosenItems
 */
class HonorDosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'honor_dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_honordsn', 'dosen_id', 'periode', 'total_honor'], 'required'],
            [['id_honordsn', 'dosen_id'], 'integer'],
            [['periode', 'total_honor'], 'string', 'max' => 45],
            [['id_honordsn'], 'unique'],
            [['dosen_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::class, 'targetAttribute' => ['dosen_id' => 'id_dosen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_honordsn' => 'Id Honordsn',
            'dosen_id' => 'Dosen ID',
            'periode' => 'Periode',
            'total_honor' => 'Total Honor',
        ];
    }

    /**
     * Gets query for [[Dosen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDosen()
    {
        return $this->hasOne(Dosen::class, ['id_dosen' => 'dosen_id']);
    }

    /**
     * Gets query for [[HonorDosenItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHonorDosenItems()
    {
        return $this->hasMany(HonorDosenItem::class, ['honordsn_id' => 'id_honordsn']);
    }
}
