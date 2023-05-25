<?php

namespace backend\controllers;

use Yii;
use backend\models\{Pegawai, RiwayatPendPegawai, DosenResearch, DosenPengabdianMasyarakat, Honor, HonorItem, Model, DataPt};
use backend\models\DosenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use kartik\mpdf\Pdf;

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

    public function actionHonorDetail($id_pegawai,$id_honor)
    {
        $honor = Honor::find()->where(['id_honor' => $id_honor])->one();
        $honorItem = HonorItem::find()->where(['honor_id' => $id_honor])->all();
        $logopt = DataPt::find()->one();
        return $this->render('honor-detail', [
            'honor'=>$honor,
            'honorItem'=>$honorItem,
            'logopt' => $logopt,
        ]);
    }

    public function actionHonorDetailPrint($id_pegawai,$id_honor) 
    {
        
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $pdf = new Pdf([
            'mode' => Pdf::MODE_CORE, // leaner size using standard fonts
            'destination' => Pdf::DEST_BROWSER,
            'content' => $this->renderPartial('honor-detail-print'),
            'marginTop' => 6,
            'marginLeft' => 10,
            'marginRight' => 10,
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.css',
            
            'options' => [
                
                // any mpdf options you wish to set
            ],
            'methods' => [
                'SetTitle' => 'Laporan Pendampingan',
                'SetSubject' => 'Generating PDF files via yii2-mpdf extension has never been easy',
                // 'SetHeader' => ['Krajee Privacy Policy||Generated On: ' . date("r")],
                //'SetFooter' => ['|Page {PAGENO}|'],
                'SetAuthor' => 'Kartik Visweswaran',
                'SetCreator' => 'Kartik Visweswaran',
                'SetKeywords' => 'Krajee, Yii2, Export, PDF, MPDF, Output, Privacy, Policy, yii2-mpdf',
            ]
        ]);
        return $pdf->render();
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

        return $this->render('add-honor', [
            'modelHonor' => $modelHonor,
            'modelsItems' => (empty($modelsItems)) ? [new HonorItem] : $modelsItems,
            'id_pegawai' => $id_pegawai,
        ]);
    }

    public function actionEditHonor($id_pegawai,$id_honor)
    {
        $id_pegawai = $_GET['id_pegawai'];
        $id_honor = $_GET['id_honor'];
        $modelHonor = Honor::find()->where(['id_honor' => $id_honor])->one();
        $modelsItems = $modelHonor->honorItems;
        

        if ($modelHonor->load(Yii::$app->request->post())) {

            $oldIDs = ArrayHelper::map($modelsItems, 'id_itemhnr', 'id_itemhnr');
            $modelsItems = Model::createMultiple(HonorItem::classname(), $modelsItems);
            Model::loadMultiple($modelsItems, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsItems, 'id_itemhnr', 'id_itemhnr')));

            // ajax validation
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsItems),
                    ActiveForm::validate($modelHonor)
                );
            }

            // validate all models
            $valid = $modelHonor->validate();
            $valid = Model::validateMultiple($modelsItems) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $modelHonor->save(false)) {
                        if (! empty($deletedIDs)) {
                            HonorItem::deleteAll(['id_itemhnr' => $deletedIDs]);
                        }
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

        return $this->render('edit-honor', [
            'modelHonor' => $modelHonor,
            'modelsItems' => (empty($modelsItems)) ? [new HonorItem] : $modelsItems,
            'id_pegawai' => $id_pegawai,
            'id_honor' => $id_honor
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
