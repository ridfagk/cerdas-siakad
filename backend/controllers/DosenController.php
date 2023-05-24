<?php

namespace backend\controllers;

use Yii;
use backend\models\{Pegawai, RiwayatPendPegawai, DosenResearch, DosenPengabdianMasyarakat, Honor, HonorItem, Model};
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
        
        
        
        return $this->render('view', [
            'model' => $this->findModel($id_pegawai),
            
        ]);
    }

    public function actionPendidikan($id_pegawai)
    {
        $pendidikan = new ActiveDataProvider([
            'query' => RiwayatPendPegawai::find()->where(['pegawai_id'=>$id_pegawai])->orderBy('id_rwytpegawai DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('pendidikan', [
            'pendidikan' => $pendidikan,
            
        ]);
    }

    public function actionResearch($id_pegawai)
    {
        $research = new ActiveDataProvider([
            'query' => DosenResearch::find()->where(['pegawai_id'=>$id_pegawai])->orderBy('id_rsch DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('research', [
            'research' => $research,
            
        ]);
    }
    
    public function actionPengabdian($id_pegawai)
    {
        $pengabdian = new ActiveDataProvider([
            'query' => DosenPengabdianMasyarakat::find()->where(['pegawai_id'=>$id_pegawai])->orderBy('id_pengabdian DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('pengabdian', [
            'pengabdian' => $pengabdian,
            
        ]);
    }

    public function actionHonor($id_pegawai)
    {
        $honor = new ActiveDataProvider([
            'query' => Honor::find()->where(['pegawai_id'=>$id_pegawai])->orderBy('id_honor DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('honor', [
            'honor' => $honor,
            
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
                return $this->redirect(['pendidikan', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('add-pendidikan', [
            'model' => $model,
            'id_pegawai' => $id_pegawai,
        ]);
    }

    public function actionEditPendidikan($id_pegawai,$id_rwytpegawai)
    {
        $id_pegawai = $_GET['id_pegawai'];
        $id_rwytpegawai = $_GET['id_rwytpegawai'];
        $model = RiwayatPendPegawai::find()->where(['id_rwytpegawai'=>$id_rwytpegawai])->one();
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['pendidikan', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('edit-pendidikan', [
            'model' => $model,  
            'id_pegawai' => $id_pegawai,
            'id_rwytpegawai' => $id_rwytpegawai,
        ]);
    }

    public function actionAddResearch($id_pegawai)
    {
        $model = new DosenResearch();
        $id_pegawai = $_GET['id_pegawai'];
        
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['research', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('add-research', [
            'model' => $model,
            'id_pegawai' => $id_pegawai,
        ]);
    }

    public function actionEditResearch($id_pegawai,$id_rsch)
    {
        $id_pegawai = $_GET['id_pegawai'];
        $id_rsch = $_GET['id_rsch'];
        $model = DosenResearch::find()->where(['id_rsch'=>$id_rsch])->one();
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['research', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('edit-research', [
            'model' => $model,  
            'id_pegawai' => $id_pegawai,
            'id_rsch' => $id_rsch,
        ]);
    }

    public function actionAddPengabdian($id_pegawai)
    {
        $model = new DosenPengabdianMasyarakat();
        $id_pegawai = $_GET['id_pegawai'];
        
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['pengabdian', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('add-pengabdian', [
            'model' => $model,
            'id_pegawai' => $id_pegawai,
        ]);
    }

    public function actionEditPengabdian($id_pegawai,$id_pengabdian)
    {
        $id_pegawai = $_GET['id_pegawai'];
        $id_pengabdian = $_GET['id_pengabdian'];
        $model = DosenPengabdianMasyarakat::find()->where(['id_pengabdian'=>$id_pengabdian])->one();
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['pengabdian', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('edit-pengabdian', [
            'model' => $model,  
            'id_pegawai' => $id_pegawai,
            'id_pengabdian' => $id_pengabdian,
        ]);
    }

    public function actionAddHonor($id_pegawai)
    {
        $id_pegawai = $_GET['id_pegawai'];
        $modelHonor = new Honor;
        $modelsItems = [new HonorItem];
        

        if ($modelHonor->load(Yii::$app->request->post())) {

            $modelsItems = Model::createMultiple(HonorItem::classname());
            Model::loadMultiple($modelsItems, Yii::$app->request->post());

            // validate all models
            $valid = $modelHonor->validate();
            $valid = Model::validateMultiple($modelsItems) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();

                try {
                    if ($flag = $modelHonor->save(false)) {
                        foreach ($modelsItems as $modelItems) {
                            $modelItems->honor_id = $modelHonor->id_honor;
                            if (! ($flag = $modelItems->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }

                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['honor', 'id_pegawai' => $modelHonor->pegawai_id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }

        return $this->renderAjax('add-honor', [
            'modelHonor' => $modelHonor,
            'modelsItems' => (empty($modelsItems)) ? [new Address] : $modelsItems,
            'id_pegawai' => $id_pegawai,
        ]);
    }

    public function actionEditHonor($id_pegawai,$id_pengabdian)
    {
        $id_pegawai = $_GET['id_pegawai'];
        $id_pengabdian = $_GET['id_pengabdian'];
        $model = Honor::find()->where(['id_pengabdian'=>$id_pengabdian])->one();
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['pengabdian', 'id_pegawai' => $id_pegawai]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('edit-pengabdian', [
            'model' => $model,  
            'id_pegawai' => $id_pegawai,
            'id_pengabdian' => $id_pengabdian,
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
