<?php

use yii\bootstrap4\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Candidates */

$this->title = 'Добавление кандидата';
$this->params['breadcrumbs'][] = ['label' => 'Candidates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidates-create">

    <h1 class="title"><?= Html::encode($this->title) ?></h1>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,'districts'=>$districts
    ]) ?>

</div>
