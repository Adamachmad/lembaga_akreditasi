<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fakultas".
 *
 * @property int $id_fakultas
 * @property int $id_universitas
 * @property string|null $nama_fakultas
 *
 * @property Prodi[] $prodis
 * @property Universitas $universitas
 */
class Fakultas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fakultas', 'id_universitas'], 'required'],
            [['id_fakultas', 'id_universitas'], 'integer'],
            [['nama_fakultas'], 'string', 'max' => 100],
            [['nama_fakultas'], 'unique'],
            [['id_fakultas'], 'unique'],
            [['id_universitas'], 'exist', 'skipOnError' => true, 'targetClass' => Universitas::class, 'targetAttribute' => ['id_universitas' => 'id_universitas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fakultas' => 'Id Fakultas',
            'id_universitas' => 'Id Universitas',
            'nama_fakultas' => 'Nama Fakultas',
        ];
    }

    /**
     * Gets query for [[Prodis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdis()
    {
        return $this->hasMany(Prodi::class, ['id_fakultas' => 'id_fakultas']);
    }

    /**
     * Gets query for [[Universitas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUniversitas()
    {
        return $this->hasOne(Universitas::class, ['id_universitas' => 'id_universitas']);
    }
}
