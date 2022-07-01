<?php

namespace app\components;
use yii\base\Widget;
//виджет обертка страницы просмотра записи с помощью bootstrap стиля card
//для использования необходимо в параметрах метода виджета begin указать model
class ViewPatternWidget extends Widget
{
    public $view;
    public $model;



    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        ob_start();
    }

    public function run()
    {
        $this->view = ob_get_clean();
        return $this->render('viewpattern',['view'=>$this->view,'model'=>$this->model]);
    }
}