<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\QuickInquiry */

$this->title = 'Update Quick Inquiry: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Quick Inquiries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quick-inquiry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
