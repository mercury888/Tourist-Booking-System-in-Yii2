<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\BlogCategoryDesc]].
 *
 * @see \common\models\BlogCategoryDesc
 */
class BlogCategoryDescQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\BlogCategoryDesc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\BlogCategoryDesc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
