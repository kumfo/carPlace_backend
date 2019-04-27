<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property int $id
 * @property string $open_id
 * @property string $nickname
 * @property string $avatar
 * @property int $create_time
 * @property int $last_login
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['create_time', 'last_login'], 'integer'],
            [['open_id'], 'string', 'max' => 128],
            [['nickname'], 'string', 'max' => 64],
            [['avatar'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'open_id' => 'Open ID',
            'nickname' => 'Nickname',
            'avatar' => 'Avatar',
            'create_time' => 'Create Time',
            'last_login' => 'Last Login',
        ];
    }
}
