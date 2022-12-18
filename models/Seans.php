<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Seans".
 *
 * @property int $id
 * @property string $photo
 * @property string $nameseans
 * @property string $date
 * @property int $age
 * @property int $price
 * @property int $janrid
 */
class Seans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Seans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo', 'nameseans', 'date', 'age', 'price', 'janrid'], 'required'],
            [['date'], 'safe'],
            [['age', 'price', 'janrid'], 'integer'],
            [['photo', 'nameseans'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Фото',
            'nameseans' => 'Название сеанса',
            'date' => 'Дата',
            'age' => 'Возрастное ограничение',
            'price' => 'Цена',
            'janrid' => 'id Жанра',
        ];
    }
}
