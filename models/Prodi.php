<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id_prodi
 * @property int $id_fakultas
 * @property string|null $nama_prodi
 * @property string|null $jenjang
 *
 * @property AkreditasiProdi[] $akreditasiProdis
 * @property Fakultas $fakultas
 * @property PenilaianProdi[] $penilaianProdis
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_prodi', 'id_fakultas'], 'required'],
            [['id_prodi', 'id_fakultas'], 'integer'],
            [['nama_prodi', 'jenjang'], 'string', 'max' => 100],
            [['nama_prodi'], 'unique'],
            [['id_prodi'], 'unique'],
            [['id_fakultas'], 'exist', 'skipOnError' => true, 'targetClass' => Fakultas::class, 'targetAttribute' => ['id_fakultas' => 'id_fakultas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prodi' => 'Id Prodi',
            'id_fakultas' => 'Id Fakultas',
            'nama_prodi' => 'Nama Prodi',
            'jenjang' => 'Jenjang',
        ];
    }

    /**
     * Gets query for [[AkreditasiProdis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAkreditasiProdis()
    {
        return $this->hasMany(AkreditasiProdi::class, ['id_prodi' => 'id_prodi']);
    }

    /**
     * Gets query for [[Fakultas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFakultas()
    {
        return $this->hasOne(Fakultas::class, ['id_fakultas' => 'id_fakultas']);
    }

    /**
     * Gets query for [[PenilaianProdis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianProdis()
    {
        return $this->hasMany(PenilaianProdi::class, ['id_prodi' => 'id_prodi']);
    }
}
