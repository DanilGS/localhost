<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Seans $model */

$this->title = 'Update Seans: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Seans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seans-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
