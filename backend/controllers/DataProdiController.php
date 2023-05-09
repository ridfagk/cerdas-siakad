<?php

namespace backend\controllers;

use backend\models\DataProdi;
use backend\models\DataProdiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataProdiController implements the CRUD actions for DataProdi model.
 */
class DataProdiController extends Controller
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
     * Lists all DataProdi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataProdiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataProdi model.
     * @param int $id_prodi Id Prodi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_prodi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_prodi),
        ]);
    }

    /**
     * Creates a new DataProdi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataProdi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_prodi' => $model->id_prodi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataProdi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_prodi Id Prodi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_prodi)
    {
        $model = $this->findModel($id_prodi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_prodi' => $model->id_prodi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataProdi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_prodi Id Prodi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_prodi)
    {
        $this->findModel($id_prodi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataProdi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_prodi Id Prodi
     * @return DataProdi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_prodi)
    {
        if (($model = DataProdi::findOne(['id_prodi' => $id_prodi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
