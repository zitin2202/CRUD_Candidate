<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Districts */

$this->title = 'Добавление района';
$this->params['breadcrumbs'][] = ['label' => 'Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="districts-create">

    <h1 class="title"><?= Html::encode($this->title) ?></h1>
    <hr>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
