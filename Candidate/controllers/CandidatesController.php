<?php

namespace app\controllers;

use app\models\Candidates;
use app\models\CandidatesSearch;
use app\models\Districts;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CandidatesController implements the CRUD actions for Candidates model.
 */
class CandidatesController extends Controller
{

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Candidates models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $districts = Districts::find()->all();
        $searchModel = new CandidatesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $genderName = get_class_vars(Candidates::className())['genderName'];
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'districts'=>$districts,
            'genderName'=>$genderName

        ]);
    }

    /**
     * Displays a single Candidates model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Candidates model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Candidates();
        $districts = Districts::find()->all();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,'districts'=>$districts
        ]);
    }

    /**
     * Updates an existing Candidates model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $districts = Districts::find()->all();
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,'districts'=>$districts
        ]);
    }

    /**
     * Deletes an existing Candidates model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSelectDelete()
    {

        $delList=[];
        if ($this->request->isAjax)
            $delList=$this->request->post();
            foreach ($delList['id'] as $id){
                $this->findModel($id)->delete();
            }

           return $this->redirect(['index']);
    }

    /**
     * Finds the Candidates model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Candidates the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Candidates::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
