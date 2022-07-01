<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CandidatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'date_of_birth') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'flat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
