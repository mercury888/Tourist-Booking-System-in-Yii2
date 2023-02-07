<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use mdm\admin\components\RouteRule;
use mdm\admin\components\Configs;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\AuthItem */
/* @var $context mdm\admin\components\ItemController */

$context = $this->context;
$labels = $context->labels();
$this->title = Yii::t('rbac-admin', $labels['Items']);
$this->params['breadcrumbs'][] = $this->title;

$rules = array_keys(Configs::authManager()->getRules());
$rules = array_combine($rules, $rules);
unset($rules[RouteRule::RULE_NAME]);
?>
<div class="col-lg-12">
    <div class="card mb-30">
        <div class="card-body">
            <div class="card-header">
                <?= Html::a(Yii::t('rbac-admin', 'Create ' . $labels['Item']), ['create'], ['class' => 'btn btn-success float-right']) ?>
                <h5 class="card-title">
                    All <?= $labels['Items'] ?>
                </h5>
            </div>
            <div class="table-responsive">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'attribute' => 'name',
                            'label' => Yii::t('rbac-admin', 'Name'),
                        ],
                        [
                            'attribute' => 'ruleName',
                            'label' => Yii::t('rbac-admin', 'Rule Name'),
                            'filter' => $rules
                        ],
                        [
                            'attribute' => 'description',
                            'label' => Yii::t('rbac-admin', 'Description'),
                        ],
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{manage} {update} {delete}',
                            'buttons' => [
                                'manage' => function ($url, $model) {
                                    return Html::a(
                                        '<span class="glyphicon glyphicon-cog"></span> Manage',
                                        Url::toRoute(['view', 'id' => $model->name]),
                                        [
                                            'title' => 'Manage '.$model->name,
                                            'class' => 'btn btn-link text-primary p-0 mr-2',
                                            'data-pjax' => '0',
                                        ]
                                    );
                                },
                            ],
                        ],
                    ],
                ])
                ?>
            </div>
        </div>
    </div>
</div>
