<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property string $test
 */
class TestModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'test' => 'Test',
        ];
    }
}
