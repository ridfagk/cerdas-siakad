<?php

namespace backend\controllers;

use Yii;
use backend\models\DataTemplateSurat;
use backend\models\DataTemplateSuratSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TemplateSuratController implements the CRUD actions for DataTemplateSurat model.
 */
class TemplateSuratController extends Controller
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
     * Lists all DataTemplateSurat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataTemplateSuratSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataTemplateSurat model.
     * @param int $id_surat Id Surat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_surat)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_surat),
        ]);
    }

    /**
     * Creates a new DataTemplateSurat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataTemplateSurat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->file = UploadedFile::getInstance($model,'file');
                    if($model->file){               
                        $file =time().'.'.$model->file->extension;
                        if ($model->file->saveAs(Yii::getAlias('@webroot').'/templatesurat/'.$file)){
                            $model->file = $file;           
                        }
                    }
                    $model->save(false);
                return $this->redirect(['view', 'id_surat' => $model->id_surat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataTemplateSurat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_surat Id Surat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_surat)
    {
        $model = $this->findModel($id_surat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_surat' => $model->id_surat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataTemplateSurat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_surat Id Surat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_surat)
    {
        $this->findModel($id_surat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataTemplateSurat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_surat Id Surat
     * @return DataTemplateSurat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_surat)
    {
        if (($model = DataTemplateSurat::findOne(['id_surat' => $id_surat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
