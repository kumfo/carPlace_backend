<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "place_share".
 *
 * @property int $id
 * @property int $member_id
 * @property string $title
 * @property string $description
 * @property int $is_share
 * @property int $share_status 1 共享中 0 非共享中
 * @property int $share_start
 * @property int $share_end
 * @property int $using_member_id
 * @property int $create_time
 */
class PlaceShare extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'place_share';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id', 'is_share', 'share_status', 'share_start', 'share_end', 'using_member_id', 'create_time'], 'integer'],
            [['title'], 'string', 'max' => 32],
            [['description'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'member_id' => 'Member ID',
            'title' => 'Title',
            'description' => 'Description',
            'is_share' => 'Is Share',
            'share_status' => 'Share Status',
            'share_start' => 'Share Start',
            'share_end' => 'Share End',
            'using_member_id' => 'Using Member ID',
            'create_time' => 'Create Time',
        ];
    }
}
