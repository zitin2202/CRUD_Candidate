<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Candidates;
use app\components\GridViewPatternWidget;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CandidatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Список кандидатов';
$this->params['breadcrumbs'][] = $this->title;
echo '<h1 class="title">' . Html::encode($this->title). '</h1><hr>' ;
    GridViewPatternWidget::begin(['dataProvider'=>$dataProvider,'name'=>'candidates']);
      echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{items}\n",
        'options' =>['id'=>'grid','class'=>'grid=view'
        ],
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
            ['class' => 'yii\grid\ActionColumn'],
            'id',
            'last_name',
            'first_name',
            'middle_name',
            [

                'attribute' =>'gender',
                'value'=> function ($model) {
                    return $model->genderName[$model->gender];
                },
                'filter' =>$genderName,
            ],
            [
                'attribute' => 'date_of_birth',
                'filter' => \kartik\date\DatePicker::widget([
                    'model'=>$searchModel,
                    'attribute' => 'date_of_birth',
                    'pluginOptions' =>
                        ['format' => 'yyyy-mm-dd',
                        'orientation'=>'bottom left',
                        ],
                ])
            ],
            [
                'attribute' => 'district_id',
                'value'=>function ($model) {
                    return $model->district->name;
                    },
                'filter' => ArrayHelper::map($districts, 'id', 'name'),
            ],
            'address',
            'flat',
        ],
    ]);
    GridViewPatternWidget::end();




