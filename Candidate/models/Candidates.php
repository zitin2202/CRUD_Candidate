<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidates".
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property int $gender
 * @property string $date_of_birth
 * @property int $district_id
 * @property string $address
 * @property int $flat
 *
 * @property Districts $district
 */
class Candidates extends \yii\db\ActiveRecord
{
    public $genderName = [1=>'Мужской',2=>'Женский'];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'candidates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'middle_name', 'gender', 'date_of_birth', 'district_id', 'address', 'flat'], 'required'],
            [['last_name','first_name','middle_name','gender','date_of_birth','district_id','address','flat'],'trim'],
            [['gender', 'district_id', 'flat'], 'default', 'value' => null],
            [['gender', 'district_id', 'flat'], 'integer'],
            ['gender','number','min'=>1,'max'=>2],
            [['date_of_birth'], 'date','format'=>'yyyy-MM-dd'],
            [['date_of_birth'], 'default', 'value' => null],
            [['last_name', 'first_name', 'middle_name'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 512],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => Districts::className(), 'targetAttribute' => ['district_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Имя',
            'first_name' => 'Фамилия',
            'middle_name' => 'Отчество',
            'gender' => 'Пол',
            'date_of_birth' => 'День рождения',
            'district_id' => 'Район',
            'address' => 'Адрес',
            'flat' => 'Квартира',
        ];
    }
    public function attributeHints()
    {
        return [
            'district_id' => 'Выберите значение...',

        ];
    }

    /**
     * Gets query for [[District]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(Districts::className(), ['id' => 'district_id']);
    }


}
