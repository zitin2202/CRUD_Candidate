<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \app\components\ViewPatternWidget;
/* @var $this yii\web\View */
/* @var $model app\models\Candidates */

$this->title = "Просмотр Кандидата";
$this->params['breadcrumbs'][] = ['label' => 'Candidates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
\yii\web\YiiAsset::register($this);
?>
<div class="candidates-view">
    <h1 class="title"><?= Html::encode($this->title) ?></h1>
    <hr>


    <?php ViewPatternWidget::begin(['model'=>$model])?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'last_name',
            'first_name',
            'middle_name',
            [

                'attribute' =>'gender',
                'value'=>function ($model) {
                    return $model->genderName[$model->gender];
                },
            ],
            'date_of_birth',
            [
                'attribute' => $model->attributeLabels()['district_id'],
                'value' => $model->district['name'],
            ],
            'address',
            'flat',
        ],
    ]) ?>
    <?php ViewPatternWidget::end()?>


</div>
