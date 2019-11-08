<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jihoz".
 *
 * @property int $id
 * @property string $nomi
 * @property int $ishchi_id
 * @property int $cnt
 *
 * @property Ishchi $ishchi
 */
class Jihoz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jihoz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'ishchi_id', 'cnt'], 'required'],
            [['ishchi_id', 'cnt'], 'integer'],
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
            'nomi' => 'Jihoz Nomi',
            'ishchi_id' => 'Xodim',
            'cnt' => 'Soni',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIshchi()
    {
        return $this->hasOne(Ishchi::className(), ['id' => 'ishchi_id']);
    }
}
