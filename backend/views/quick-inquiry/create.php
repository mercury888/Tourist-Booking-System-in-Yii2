<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\QuickInquiry */

$this->title = 'Create Quick Inquiry';
$this->params['breadcrumbs'][] = ['label' => 'Quick Inquiries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quick-inquiry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
