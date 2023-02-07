<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Featured]].
 *
 * @see \common\models\Featured
 */
class FeaturedQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\Featured[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\Featured|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
