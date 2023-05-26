<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tahun_kurikulum".
 *
 * @property int $id_thnkurikulum
 * @property string $tahun
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 */
class TahunKurikulum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tahun_kurikulum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'tgl_mulai', 'tgl_selesai'], 'required'],
            [['tgl_mulai', 'tgl_selesai'], 'safe'],
            [['tahun'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_thnkurikulum' => 'Id Thnkurikulum',
            'tahun' => 'Tahun',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_selesai' => 'Tgl Selesai',
        ];
    }
}
