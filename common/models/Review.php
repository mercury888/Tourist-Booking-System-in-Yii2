<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_review".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $status
 * @property string|null $create_time
 * @property string $author
 * @property string $email
 * @property string|null $url
 * @property string $image
 * @property int $author_id
 * @property int $package_id
 * @property int $rating 1-5
 * @property int $posted_to_facebook 0=>not posted; 1=>posted
 * @property int $allow_fb_post 0=>dont publish; 1=>publish
 * @property string $photos
 * @property string $slug
 * @property float $pre_trip_info_rating
 * @property float|null $meal_rating
 * @property float|null $staffs_rating
 * @property float $transportation_rating
 * @property float|null $accommodation_rating
 * @property float $vale_of_money_rating
 * @property string|null $why_did_you_choose
 * @property string|null $would_you_recomend
 * @property string|null $advice_traveller
 * @property int $help_full_yes_count
 * @property int $help_full_no_count
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'status', 'author', 'email', 'image', 'author_id', 'package_id', 'rating', 'posted_to_facebook', 'allow_fb_post', 'photos', 'slug', 'help_full_yes_count', 'help_full_no_count'], 'required'],
            [['content', 'photos'], 'string'],
            [['status', 'author_id', 'package_id', 'rating', 'posted_to_facebook', 'allow_fb_post', 'help_full_yes_count', 'help_full_no_count'], 'integer'],
            [['create_time'], 'safe'],
            [['pre_trip_info_rating', 'meal_rating', 'staffs_rating', 'transportation_rating', 'accommodation_rating', 'vale_of_money_rating'], 'number'],
            [['title', 'author', 'email', 'url', 'image', 'slug'], 'string', 'max' => 255],
            [['why_did_you_choose', 'would_you_recomend', 'advice_traveller'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'author' => 'Author',
            'email' => 'Email',
            'url' => 'Url',
            'image' => 'Image',
            'author_id' => 'Author ID',
            'package_id' => 'Package ID',
            'rating' => 'Rating',
            'posted_to_facebook' => 'Posted To Facebook',
            'allow_fb_post' => 'Allow Fb Post',
            'photos' => 'Photos',
            'slug' => 'Slug',
            'pre_trip_info_rating' => 'Pre Trip Info Rating',
            'meal_rating' => 'Meal Rating',
            'staffs_rating' => 'Staffs Rating',
            'transportation_rating' => 'Transportation Rating',
            'accommodation_rating' => 'Accommodation Rating',
            'vale_of_money_rating' => 'Vale Of Money Rating',
            'why_did_you_choose' => 'Why Did You Choose',
            'would_you_recomend' => 'Would You Recomend',
            'advice_traveller' => 'Advice Traveller',
            'help_full_yes_count' => 'Help Full Yes Count',
            'help_full_no_count' => 'Help Full No Count',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ReviewQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ReviewQuery(get_called_class());
    }
}
