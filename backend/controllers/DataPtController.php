<?php

namespace backend\controllers;

use backend\models\DataPT;
use backend\models\DataPTSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataPTController implements the CRUD actions for DataPT model.
 */
class DataPtController extends Controller
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
     * Lists all DataPT models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataPTSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataPT model.
     * @param string $kd_pt Kd Pt
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_pt)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_pt),
        ]);
    }

    /**
     * Creates a new DataPT model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataPT();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_pt' => $model->kd_pt]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataPT model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_pt Kd Pt
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_pt)
    {
        $model = $this->findModel($kd_pt);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_pt' => $model->kd_pt]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataPT model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_pt Kd Pt
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_pt)
    {
        $this->findModel($kd_pt)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataPT model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_pt Kd Pt
     * @return DataPT the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_pt)
    {
        if (($model = DataPT::findOne(['kd_pt' => $kd_pt])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}