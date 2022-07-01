<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\LinkPager;

?>

<div class="<?=$name?>-index">
    <div class="card border-info">

        <div class="card-header bg-info text-white">
            <span class="gridview-title"><span class="fa fa-table gridview-icon"></span><?=$this->title?></span>
            <div class="summary"><?= GridView::widget(['dataProvider' => $dataProvider, 'layout'=>"{summary}"])?></div>
        </div>
        <div class="card-text mx-3 pt-2">
            <?= Html::a('<div class="fa fa-trash-alt btn-grid-panel"></div>', null, ['class' => 'btn btn-danger',' id'=>'select-delete',
            'data' => ['url' => Url::to(["$name/select-delete"]),
            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?')]]) ?>
            <?= Html::a('<div><span class="fa fa-plus btn-grid-panel" ></span>&nbsp&nbspДобавить</div>', ['create'], ['class' => 'btn btn-success'])?>
        </div>
        <div class="card-body">
        <?=$gridview?>
            <a href='<?=Url::to(["$name/"]) ?>'<button class="btn btn-info btn-refresh px-3 py-2"><span class="fa fa-refresh "></span>&nbsp&nbsp&nbspОбновить</button></a>
        </div>
        <div class="card-footer text-muted">
            <?php
            echo LinkPager::widget([
                'pagination' => $dataProvider->pagination,
            ]);

            ?>
        </div>
    </div>