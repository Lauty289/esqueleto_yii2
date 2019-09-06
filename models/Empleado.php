<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property int $codigo
 * @property string $nombe
 * @property string $apellido
 * @property int $edad
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombe', 'apellido', 'edad'], 'required'],
            [['edad'], 'integer'],
            [['nombe', 'apellido'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'nombe' => 'Nombe',
            'apellido' => 'Apellido',
            'edad' => 'Edad',
        ];
    }
}
