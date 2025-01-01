<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lembaga_akreditas".
 *
 * @property int $id_la
 * @property string|null $nama_la
 *
 * @property AkreditasiProdi[] $akreditasiProdis
 */
class LembagaAkreditas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lembaga_akreditas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_la'], 'required'],
            [['id_la'], 'integer'],
            [['nama_la'], 'string', 'max' => 100],
            [['id_la'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_la' => 'Id La',
            'nama_la' => 'Nama La',
        ];
    }

    /**
     * Gets query for [[AkreditasiProdis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkreditasiProdis()
    {
        return $this->hasMany(AkreditasiProdi::class, ['id_la' => 'id_la']);
    }
}
