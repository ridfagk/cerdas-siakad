<?php

namespace backend\controllers;

use backend\models\EvalMatkul;
use backend\models\EvalMatkulSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EvalMatkulController implements the CRUD actions for EvalMatkul model.
 */
class EvalMatkulController extends Controller
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
     * Lists all EvalMatkul models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EvalMatkulSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EvalMatkul model.
     * @param int $id_evalmk Id Evalmk
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_evalmk)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_evalmk),
        ]);
    }

    /**
     * Creates a new EvalMatkul model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new EvalMatkul();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_evalmk' => $model->id_evalmk]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EvalMatkul model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_evalmk Id Evalmk
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_evalmk)
    {
        $model = $this->findModel($id_evalmk);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_evalmk' => $model->id_evalmk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EvalMatkul model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_evalmk Id Evalmk
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_evalmk)
    {
        $this->findModel($id_evalmk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EvalMatkul model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_evalmk Id Evalmk
     * @return EvalMatkul the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_evalmk)
    {
        if (($model = EvalMatkul::findOne(['id_evalmk' => $id_evalmk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
