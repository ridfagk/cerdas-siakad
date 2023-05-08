<?php

namespace backend\controllers;
use Yii;
use backend\models\DataPT;
use backend\models\DataPTSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * DataPTController implements the CRUD actions for DataPT model.
 */
class DataptController extends Controller
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
    public function actionIndexa()
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
    public function actionIndex()
    {
        $cekpt = DataPT::find()->count();
        if ($cekpt < 1) {
            $model = new DataPT();

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
        }else{
            $model = DataPT::find()->one();

            if ($this->request->isPost) {
                if ($model->load($this->request->post())) {
                    $model->logo_pt = UploadedFile::getInstance($model,'logo_pt');
                    if($model->logo_pt){               
                        $file =$model->kd_pt.'.'.$model->logo_pt->extension;
                        if ($model->logo_pt->saveAs(Yii::getAlias('@webroot').'/img/'.$file)){
                            $model->logo_pt = $file;           
                        }
                    }
                    $model->save(false);
                    return $this->redirect(['index']);
                }
            } else {
                $model->loadDefaultValues();
            }
            return $this->render('update', [
                'model' => $model,
            ]);
        }
        

        
    }

    public function actionAddfoto()
    {
        $model = DataPT::find()->one();
        $smid = $_GET['smid'];
        $idx = $_GET['id'];
        $model->sm_id = $smid;
        $model->timecreated =  date('Y-m-d H:i:s');
        $model->foto_id =  time();
        if ($model->load(Yii::$app->request->post())) {
            $model->foto = UploadedFile::getInstance($model,'foto');
            if($model->foto){               
                $file =$model->foto_id.'.'.$model->foto->extension;
                if ($model->foto->saveAs(Yii::getAlias('@webroot').'/adminsbb/fotosm/'.$file)){
                    $model->foto = $file;           
                }
            }
            $model->save(false);
            return $this->redirect(['view','id'=>$idx,'smid'=>$smid]);
        }

        return $this->renderAjax('addfoto', [
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
