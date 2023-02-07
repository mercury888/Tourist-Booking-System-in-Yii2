<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\TripStatus]].
 *
 * @see \common\models\TripStatus
 */
class TripStatusQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\TripStatus[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\TripStatus|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
