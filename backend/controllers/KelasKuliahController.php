<?php

namespace backend\controllers;

use Yii;
use backend\models\{KelasKuliah, TimKelasKuliah};
use backend\models\KelasKuliahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KelasKuliahController implements the CRUD actions for KelasKuliah model.
 */
class KelasKuliahController extends Controller
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
     * Lists all KelasKuliah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KelasKuliahSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KelasKuliah model.
     * @param int $id_kelas Id Kelas
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */


    public function actionDetailKelas($id_kelas)
    { 
       $id_kelas = $_GET['id_kelas'];
        $cekkelas = KelasKuliah::find()->where(['id_kelas'=>$id_kelas])->one();

        if (!empty($cekkelas)) {

            $model = KelasKuliah::find()->where(['id_kelas'=>$id_kelas])->one();
            
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['detail-kelas']);
            }
        } 

        return $this->render('detail-kelas', [
            'model' => $model,
            'id_kelas' => $id_kelas,
        ]);
    }

    /**
     * Creates a new KelasKuliah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KelasKuliah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kelas' => $model->id_kelas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KelasKuliah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kelas Id Kelas
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kelas)
    {
        $model = $this->findModel($id_kelas);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['detail-kelas', 'id_kelas' => $model->id_kelas]);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KelasKuliah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kelas Id Kelas
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kelas)
    {
        $this->findModel($id_kelas)->delete();

        return $this->redirect(['index']);
    }


    public function actionTimPengajar($id_kelas)
    {
        $id_kelas = $_GET['id_kelas'];
        $model = TimKelasKuliah::find()->where(['kelas_id'=>$id_kelas])->all();
        $kelas = KelasKuliah::find()->where(['id_kelas'=>$id_kelas])->one();

        return $this->render('tim-pengajar', [
            'model' => $model,
            'kelas' => $kelas,
            'id_kelas' => $id_kelas,
        ]);
    }

    public function actionAddPengajar($id_kelas)
    {
        $model = new TimKelasKuliah();
        $id_kelas = $_GET['id_kelas'];
        
       
        if ($this->request->isPost) {
          
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['tim-pengajar', 'id_kelas' => $id_kelas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('add-pengajar', [
            'model' => $model,
            'id_kelas' => $id_kelas,
        ]);
    }


    public function actionPresensi()
    {
        $model = new TimKelasKuliah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kelas' => $model->id_kelas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->renderAjax('add-mentor', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the KelasKuliah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kelas Id Kelas
     * @return KelasKuliah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kelas)
    {
        if (($model = KelasKuliah::findOne(['id_kelas' => $id_kelas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
