<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Districts */

$this->title = 'Обновление района';
$this->params['breadcrumbs'][] = ['label' => 'Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="districts-update">

    <h1 class="title"><?= Html::encode($this->title) ?></h1>
    <hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
