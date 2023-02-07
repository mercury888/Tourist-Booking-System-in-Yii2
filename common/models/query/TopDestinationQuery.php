<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\TopDestination]].
 *
 * @see \common\models\TopDestination
 */
class TopDestinationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\TopDestination[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\TopDestination|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
