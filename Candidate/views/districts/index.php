<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Districts;
use app\components\GridViewPatternWidget;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DistrictsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список районов';
$this->params['breadcrumbs'][] = $this->title;
echo '<h1 class="title">' . Html::encode($this->title). '</h1><hr>' ;

  GridViewPatternWidget::begin(['dataProvider'=>$dataProvider,'name'=>'districts']);
     echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{items}\n",
        'options' =>['id'=>'grid','class'=>'grid=view'],
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
            ['class' => 'yii\grid\ActionColumn'],
            'id',
            'name',
        ],
    ]);
 GridViewPatternWidget::end();

