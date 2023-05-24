<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "honor".
 *
 * @property int $id_honor
 * @property int $pegawai_id
 * @property string $periode
 * @property string $total_honor
 *
 * @property HonorItem[] $honorItems
 * @property Pegawai $pegawai
 */
class Honor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'honor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'bulan', 'tahun'], 'required'],
            [['id_honor', 'pegawai_id'], 'integer'],
            [['bulan', 'tahun', 'total_honor'], 'string', 'max' => 45],
            [['id_honor'], 'unique'],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['pegawai_id' => 'id_pegawai']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_honor' => 'Id Honor',
            'pegawai_id' => 'Pegawai ID',
            
            'total_honor' => 'Total Honor',
        ];
    }

    /**
     * Gets query for [[HonorItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHonorItems()
    {
        return $this->hasMany(HonorItem::class, ['honor_id' => 'id_honor']);
    }

    /**
     * Gets query for [[Pegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(Pegawai::class, ['id_pegawai' => 'pegawai_id']);
    }
}
