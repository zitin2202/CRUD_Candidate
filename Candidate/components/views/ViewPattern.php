<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\LinkPager;

?>


    <div class="card border-info">
        <div class="card-header bg-info text-white">
            <span class="view-number">Запись #<?=$model->id?></span>
            <div class="view-button">
                <?= Html::a('', ['update', 'id' => $model->id], ['class' => 'fa fa-pen']) ?>
                <?= Html::a('', ['delete', 'id' => $model->id], [
                    'class' => 'fa fa-trash-alt',
                    'data' => [
                        'confirm' => Yii::t('yii','Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
        <div class="card-body">
            <?=$view?>
        </div>
    </div>