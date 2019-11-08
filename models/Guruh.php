<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guruh".
 *
 * @property int $id
 * @property string $nomi
 * @property int $ishchi_id
 *
 * @property Bola[] $bolas
 * @property Ishchi $ishchi
 */
class Guruh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guruh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'ishchi_id'], 'required'],
            [['ishchi_id'], 'integer'],
            [['nomi'], 'string', 'max' => 255],
            [['ishchi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ishchi::className(), 'targetAttribute' => ['ishchi_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Guruh',
            'ishchi_id' => 'Tarbiyachi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBolas()
    {
        return $this->hasMany(Bola::className(), ['guruh_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIshchi()
    {
        return $this->hasOne(Ishchi::className(), ['id' => 'ishchi_id']);
    }
}
