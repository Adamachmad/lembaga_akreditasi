<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akreditasi_prodi".
 *
 * @property int $id_akreditasi
 * @property int $id_prodi
 * @property int $id_la
 * @property string|null $tgl_mulai
 * @property string|null $tgl_akhir
 * @property string|null $no_sk
 *
 * @property LembagaAkreditas $la
 * @property Prodi $prodi
 */
class AkreditasiProdi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akreditasi_prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_akreditasi', 'id_prodi', 'id_la'], 'required'],
            [['id_akreditasi', 'id_prodi', 'id_la'], 'integer'],
            [['tgl_mulai', 'tgl_akhir'], 'safe'],
            [['no_sk'], 'string', 'max' => 100],
            [['id_akreditasi'], 'unique'],
            [['id_la'], 'exist', 'skipOnError' => true, 'targetClass' => LembagaAkreditas::class, 'targetAttribute' => ['id_la' => 'id_la']],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::class, 'targetAttribute' => ['id_prodi' => 'id_prodi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_akreditasi' => 'Id Akreditasi',
            'id_prodi' => 'Id Prodi',
            'id_la' => 'Id La',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_akhir' => 'Tgl Akhir',
            'no_sk' => 'No Sk',
        ];
    }

    /**
     * Gets query for [[La]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLa()
    {
        return $this->hasOne(LembagaAkreditas::class, ['id_la' => 'id_la']);
    }

    /**
     * Gets query for [[Prodi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Prodi::class, ['id_prodi' => 'id_prodi']);
    }
}
