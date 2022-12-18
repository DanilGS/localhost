<?php

use app\models\Seans;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SeansSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Сеансы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seans-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создай сеанс', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div><a href="/seans/index?SeansSearch%5Bid%5D=&SeansSearch%5Bphoto%5D=&SeansSearch%5Bnameseans%5D=&SeansSearch%5Bdate%5D=&SeansSearch%5Bage%5D=&SeansSearch%5Bprice%5D=&SeansSearch%5Bjanrid%5D=1">Комедии</a>
    <a href="/seans?SeansSearch%5Bid%5D=&SeansSearch%5Bphoto%5D=&SeansSearch%5Bnameseans%5D=&SeansSearch%5Bdate%5D=&SeansSearch%5Bage%5D=&SeansSearch%5Bprice%5D=&SeansSearch%5Bjanrid%5D=2">боевики</a>
    <a href="/seans/index?SeansSearch%5Bid%5D=&SeansSearch%5Bphoto%5D=&SeansSearch%5Bnameseans%5D=&SeansSearch%5Bdate%5D=&SeansSearch%5Bage%5D=&SeansSearch%5Bprice%5D=&SeansSearch%5Bjanrid%5D=3">офигенная</a>
    <a href="/seans/index?SeansSearch%5Bid%5D=&SeansSearch%5Bphoto%5D=&SeansSearch%5Bnameseans%5D=&SeansSearch%5Bdate%5D=&SeansSearch%5Bage%5D=&SeansSearch%5Bprice%5D=&SeansSearch%5Bjanrid%5D=4">крутая</a>
    <a href="/seans">очистить фильтр</a>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'photo',
            'nameseans',
            'date',
            'age',
            'price',
            'janrid',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Seans $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
