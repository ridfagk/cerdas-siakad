<?php

namespace backend\controllers;

use backend\models\EvalTKM;
use backend\models\EvalTKMSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EvalTkmController implements the CRUD actions for EvalTKM model.
 */
class EvalTkmController extends Controller
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
     * Lists all EvalTKM models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EvalTKMSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EvalTKM model.
     * @param int $id_evaldsn Id Evaldsn
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_evaldsn)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_evaldsn),
        ]);
    }

    /**
     * Creates a new EvalTKM model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new EvalTKM();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_evaldsn' => $model->id_evaldsn]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EvalTKM model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_evaldsn Id Evaldsn
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_evaldsn)
    {
        $model = $this->findModel($id_evaldsn);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_evaldsn' => $model->id_evaldsn]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EvalTKM model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_evaldsn Id Evaldsn
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_evaldsn)
    {
        $this->findModel($id_evaldsn)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EvalTKM model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_evaldsn Id Evaldsn
     * @return EvalTKM the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_evaldsn)
    {
        if (($model = EvalTKM::findOne(['id_evaldsn' => $id_evaldsn])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
