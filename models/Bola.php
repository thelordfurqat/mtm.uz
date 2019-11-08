<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bola".
 *
 * @property int $id
 * @property string $fio
 * @property string $tugilgan_vaqti
 * @property string $guvohnoma_raqami
 * @property string $otasi
 * @property string $ota_pass
 * @property string $ota_tel
 * @property string $onasi
 * @property string $ona_pass
 * @property string $ona_tel
 * @property string $phone
 * @property int $guruh_id
 * @property string $kelgan_vaqti
 * @property int $status
 *
 * @property Guruh $guruh
 * @property Tolov[] $tolovs
 */
class Bola extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bola';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'guruh_id', 'kelgan_vaqti'], 'required'],
            [['tugilgan_vaqti', 'kelgan_vaqti'], 'safe'],
            [['guruh_id'], 'integer'],
            [['fio', 'guvohnoma_raqami','status', 'otasi', 'ota_pass', 'ota_tel', 'onasi', 'ona_pass', 'ona_tel', 'phone'], 'string', 'max' => 255],
            [['guruh_id'], 'exist', 'skipOnError' => true, 'targetClass' => Guruh::className(), 'targetAttribute' => ['guruh_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Familiya Ism Sharif',
            'tugilgan_vaqti' => 'Tug\'ilgan Vaqti',
            'guvohnoma_raqami' => 'Guvohnoma Raqami',
            'otasi' => 'Otasi',
            'ota_pass' => 'Otasining Passporti',
            'ota_tel' => 'Otasining Telefoni',
            'onasi' => 'Onasi',
            'ona_pass' => 'Onasining Passporti',
            'ona_tel' => 'Onasining Telefoni',
            'phone' => 'Uy Telefoni',
            'guruh_id' => 'Guruh',
            'kelgan_vaqti' => 'Kelgan Vaqti',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuruh()
    {
        return $this->hasOne(Guruh::className(), ['id' => 'guruh_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTolovs()
    {
        return $this->hasMany(Tolov::className(), ['bola_id' => 'id']);
    }

}
