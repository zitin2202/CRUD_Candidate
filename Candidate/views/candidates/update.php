<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Candidates */

$this->title = 'Обновление Кандидата ';
$this->params['breadcrumbs'][] = ['label' => 'Candidates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="candidates-update">
    <h1 class="title"><?= Html::encode($this->title) ?>
    </h1>
    <hr>
    <?= $this->render('_form', [
        'model' => $model,'districts'=>$districts
    ]) ?>

</div>
