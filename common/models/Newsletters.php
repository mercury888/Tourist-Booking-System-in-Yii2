<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_newsletters".
 *
 * @property int $id
 * @property int $template_id
 * @property string $subject
 * @property string $pub_date Publish date
 * @property string $detail
 * @property int $number Newsletter Number
 * @property string $date_updated
 * @property int $send_status newsletter send status  - 0 (not sent), 1(sending in progress),2(sent)
 * @property string|null $send_date newsletter sent date
 * @property int $recipients_no no. of recipients of the newsletter
 * @property int $num_sent
 */
class Newsletters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_newsletters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['template_id', 'subject', 'pub_date', 'detail', 'number', 'recipients_no', 'num_sent'], 'required'],
            [['template_id', 'number', 'send_status', 'recipients_no', 'num_sent'], 'integer'],
            [['pub_date', 'date_updated', 'send_date'], 'safe'],
            [['detail'], 'string'],
            [['subject'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'template_id' => Yii::t('app', 'Template ID'),
            'subject' => Yii::t('app', 'Subject'),
            'pub_date' => Yii::t('app', 'Pub Date'),
            'detail' => Yii::t('app', 'Detail'),
            'number' => Yii::t('app', 'Number'),
            'date_updated' => Yii::t('app', 'Date Updated'),
            'send_status' => Yii::t('app', 'Send Status'),
            'send_date' => Yii::t('app', 'Send Date'),
            'recipients_no' => Yii::t('app', 'Recipients No'),
            'num_sent' => Yii::t('app', 'Num Sent'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NewslettersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NewslettersQuery(get_called_class());
    }
}
