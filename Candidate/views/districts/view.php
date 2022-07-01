<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\components\ViewPatternWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Districts */

$this->title = "Просмотр района";
$this->params['breadcrumbs'][] = ['label' => 'Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="districts-view">

    <h1 class="title"><?= Html::encode($this->title) ?></h1>
    <hr>
    <?php ViewPatternWidget::begin(['model'=>$model])?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>
    <?php ViewPatternWidget::end()?>

</div>
