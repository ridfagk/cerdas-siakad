<?php

namespace backend\controllers;

use backend\models\TahunKurikulum;
use backend\models\TahunKurikulumSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TahunKurikulumController implements the CRUD actions for TahunKurikulum model.
 */
class TahunKurikulumController extends Controller
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
     * Lists all TahunKurikulum models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TahunKurikulumSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pagination' => $dataProvider->pagination
        ]);
    }

    /**
     * Displays a single TahunKurikulum model.
     * @param int $id_thnkurikulum Id Thnkurikulum
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_thnkurikulum)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_thnkurikulum),
        ]);
    }

    /**
     * Creates a new TahunKurikulum model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TahunKurikulum();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TahunKurikulum model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_thnkurikulum Id Thnkurikulum
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_thnkurikulum)
    {
        $model = $this->findModel($id_thnkurikulum);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_thnkurikulum' => $model->id_thnkurikulum]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TahunKurikulum model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_thnkurikulum Id Thnkurikulum
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_thnkurikulum)
    {
        $this->findModel($id_thnkurikulum)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TahunKurikulum model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_thnkurikulum Id Thnkurikulum
     * @return TahunKurikulum the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_thnkurikulum)
    {
        if (($model = TahunKurikulum::findOne(['id_thnkurikulum' => $id_thnkurikulum])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
