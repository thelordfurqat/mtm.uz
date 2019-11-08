<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ishchi".
 *
 * @property int $id
 * @property string $fio
 * @property string $lavozim
 * @property string $tel
 * @property string $passport
 *
 * @property Guruh[] $guruhs
 * @property Jihoz[] $jihozs
 */
class Ishchi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ishchi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'lavozim'], 'required'],
            [['fio', 'lavozim', 'tel', 'passport'], 'string', 'max' => 255],
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
            'lavozim' => 'Lavozim',
            'tel' => 'Telefon',
            'passport' => 'Passport',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGuruhs()
    {
        return $this->hasMany(Guruh::className(), ['ishchi_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJihozs()
    {
        return $this->hasMany(Jihoz::className(), ['ishchi_id' => 'id']);
    }
}
