<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "districts".
 *
 * @property int $id
 * @property string $name
 *
 * @property Candidates[] $candidates
 */
class Districts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'districts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }

    /**
     * Gets query for [[Candidates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCandidates()
    {
        return $this->hasMany(Candidates::className(), ['district_id' => 'id']);
    }
}
