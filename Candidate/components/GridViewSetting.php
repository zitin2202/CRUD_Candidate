<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace app\components;
use yii\grid\ActionColumn;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
$actionColumnSetting = [
    'header'=>'Действия',
    'headerOptions' => ['width' => '150'],
    'buttonOptions'=>['style'=>'panding-left:20px'],
    'template' => "<span class='pl-2'>{view} &nbsp {update} &nbsp {delete} &nbsp {link}</span>",
    'buttons' => [
        'view' => function($name, $model, $key){
            return Html::a('<i class="fa fa-eye" aria-hidden="true" style="font-size:1.5em;"></i>', ['view','id'=>$key]);
        },
        'update' => function($name, $model, $key){
            return Html::a('<i class="fa fa-pen" aria-hidden="true" style="font-size:1.5em;"></i>', ['update','id'=>$key]);
        },
        'delete' => function($name, $model, $key){
            return Html::a('<i class="fa fa-trash" aria-hidden="true" style="font-size:1.5em;"></i>', ['delete', 'id' => $model->id], [
                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'data-method' => 'post',
            ]);
        }

    ],
];



