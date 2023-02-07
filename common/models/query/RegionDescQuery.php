<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\RegionDesc]].
 *
 * @see \common\models\RegionDesc
 */
class RegionDescQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\RegionDesc[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\RegionDesc|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
