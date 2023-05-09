<?php

namespace backend\controllers;

use backend\models\DataTA;
use backend\models\DataTASearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TahunAkademikController implements the CRUD actions for DataTA model.
 */
class TahunAkademikController extends Controller
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
     * Lists all DataTA models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataTASearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataTA model.
     * @param int $id_thnakademik Id Thnakademik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_thnakademik)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_thnakademik),
        ]);
    }

    /**
     * Creates a new DataTA model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataTA();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_thnakademik' => $model->id_thnakademik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataTA model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_thnakademik Id Thnakademik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_thnakademik)
    {
        $model = $this->findModel($id_thnakademik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_thnakademik' => $model->id_thnakademik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataTA model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_thnakademik Id Thnakademik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_thnakademik)
    {
        $this->findModel($id_thnakademik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataTA model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_thnakademik Id Thnakademik
     * @return DataTA the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_thnakademik)
    {
        if (($model = DataTA::findOne(['id_thnakademik' => $id_thnakademik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
