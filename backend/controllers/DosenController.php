<?php

namespace backend\controllers;

use backend\models\{Pegawai, RiwayatPendPegawai, DosenResearch, DosenPengabdianMasyarakat};
use backend\models\DosenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * DosenController implements the CRUD actions for Pegawai model.
 */
class DosenController extends Controller
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
     * Lists all Pegawai models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DosenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pagination' => $dataProvider->pagination,
        ]);
    }

    /**
     * Displays a single Pegawai model.
     * @param int $id_pegawai Id Pegawai
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pegawai)
    {
        $pendidikan = new ActiveDataProvider([
            'query' => RiwayatPendPegawai::find()->where(['pegawai_id'=>$id_pegawai])->orderBy('id_rwytpegawai DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        $research = new ActiveDataProvider([
            'query' => DosenResearch::find()->where(['pegawai_id'=>$id_pegawai])->orderBy('id_rsch DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        $pengabdian = new ActiveDataProvider([
            'query' => DosenPengabdianMasyarakat::find()->where(['pegawai_id'=>$id_pegawai])->orderBy('id_pengabdian DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('view', [
            'model' => $this->findModel($id_pegawai),
            'pendidikan' => $pendidikan,
            'research' => $research,
            'pengabdian' => $pengabdian,
        ]);
    }

    /**
     * Creates a new Pegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pegawai();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pegawai' => $model->id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pegawai Id Pegawai
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pegawai)
    {
        $model = $this->findModel($id_pegawai);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pegawai' => $model->id_pegawai]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pegawai Id Pegawai
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pegawai)
    {
        $this->findModel($id_pegawai)->delete();

        return $this->redirect(['index']);
    }

    public function actionAddPendidikan($id_pegawai)
    {
        $model = new RiwayatPendPegawai();
        $id_pegawai = $_GET['id_pegawai'];
        
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('add-pendidikan', [
            'model' => $model,
            'id_pegawai' => $id_pegawai,
        ]);
    }

    public function actionAddResearch($id_pegawai)
    {
        $model = new DosenResearch();
        $id_pegawai = $_GET['id_pegawai'];
        
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('add-research', [
            'model' => $model,
            'id_pegawai' => $id_pegawai,
        ]);
    }

    public function actionAddPengabdian($id_pegawai)
    {
        $model = new DosenPengabdianMasyarakat();
        $id_pegawai = $_GET['id_pegawai'];
        
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('add-pengabdian', [
            'model' => $model,
            'id_pegawai' => $id_pegawai,
        ]);
    }

    /**
     * Finds the Pegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pegawai Id Pegawai
     * @return Pegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pegawai)
    {
        if (($model = Pegawai::findOne(['id_pegawai' => $id_pegawai])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
