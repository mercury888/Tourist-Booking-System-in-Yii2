<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\CustomTab]].
 *
 * @see \common\models\CustomTab
 */
class CustomTabQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\CustomTab[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\CustomTab|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
