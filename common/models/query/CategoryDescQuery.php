<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\CategoryDesc]].
 *
 * @see \common\models\CategoryDesc
 */
class CategoryDescQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\CategoryDesc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\CategoryDesc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
