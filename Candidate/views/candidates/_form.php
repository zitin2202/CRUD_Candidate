<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use \kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Candidates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidates-form">

    <?php $form = ActiveForm::begin([
        'layout'=>'horizontal',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCssClasses' => [
                'label' => 'col-sm-1',
                'offset' => 'col-sm-offset-5',
                'wrapper' => 'col-sm-11',
                'error' => '',
                'hint' => '',
            ],

        ],
    ])
    ?>
    <?php
    ?>
    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList($model->genderName); ?>

    <?= $form->field($model, 'date_of_birth')->widget(DatePicker::className(),['pluginOptions' => ['format' => 'yyyy-mm-dd','orientation'=>'bottom left',]]) ?>

    <?= $form->field($model, 'district_id')->dropDownList(
        ArrayHelper::map($districts, 'id', 'name'))?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
