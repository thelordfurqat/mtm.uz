<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tolov".
 *
 * @property int $id
 * @property int $bola_id
 * @property int $tolov
 * @property string $sana
 * @property string $vaqt
 *
 * @property Bola $bola
 */
class Tolov extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tolov';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bola_id', 'tolov', 'sana', 'vaqt'], 'required'],
            [['bola_id', 'tolov'], 'integer'],
            [['sana', 'vaqt'], 'safe'],
            [['bola_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bola::className(), 'targetAttribute' => ['bola_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bola_id' => 'Tarbiyalanuvchi',
            'tolov' => 'Tolov',
            'sana' => 'Sana',
            'vaqt' => 'Vaqt',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBola()
    {
        return $this->hasOne(Bola::className(), ['id' => 'bola_id']);
    }
}
