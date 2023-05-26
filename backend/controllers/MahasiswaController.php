<?php

namespace backend\controllers;

use backend\models\{DataMhs, MhsRiwayatPend, MhsAlamat, MhsOrtu};
use backend\models\DataMhsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MahasiswaController implements the CRUD actions for DataMhs model.
 */
class MahasiswaController extends Controller
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
     * Lists all DataMhs models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataMhsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pagination' => $dataProvider->pagination,
        ]);
    }

    /**
     * Displays a single DataMhs model.
     * @param int $id_mahasiswa Id Mahasiswa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nim)
    {
        return $this->render('view', [
            'model' => $this->findModel($nim),
        ]);
    }

    public function actionAlamatMhs($nim)
    {
        $model = MhsAlamat::find()->where(['nim'=>$nim])->one();
        return $this->render('alamat-mhs', [
            'model' => $model,
        ]);
    }

    public function actionFormAlamat($nim)
    {
        $cekalamat = MhsAlamat::find()->where(['nim'=>$nim])->one();
        if (empty($cekalamat)) {
            $model = new MhsAlamat();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['alamat-mhs','nim'=>$nim]);
                }
            } else {
                $model->loadDefaultValues();
            }
            return $this->render('form-alamat', [
                'model' => $model,
            ]);
        }else{
            $model = MhsAlamat::find()->where(['nim'=>$nim])->one();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                  
                    return $this->redirect(['alamat-mhs','nim'=>$nim]);
                }
            } else {
                $model->loadDefaultValues();
            }
            return $this->render('form-alamat', [
                'model' => $model,
            ]);
        }
    }

    public function actionOrtuMhs($nim)
    {
        $model = MhsOrtu::find()->where(['nim'=>$nim])->one();
        return $this->render('ortu-mhs', [
            'model' => $model,
        ]);
    }

    public function actionFormOrtu($nim)
    {
        $cekalamat = MhsOrtu::find()->where(['nim'=>$nim])->one();
        if (empty($cekalamat)) {
            $model = new MhsOrtu();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                    return $this->redirect(['ortu-mhs','nim'=>$nim]);
                }
            } else {
                $model->loadDefaultValues();
            }
            return $this->render('form-ortu', [
                'model' => $model,
            ]);
        }else{
            $model = MhsOrtu::find()->where(['nim'=>$nim])->one();

            if ($this->request->isPost) {
                if ($model->load($this->request->post()) && $model->save()) {
                  
                    return $this->redirect(['ortu-mhs','nim'=>$nim]);
                }
            } else {
                $model->loadDefaultValues();
            }
            return $this->render('form-ortu', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Creates a new DataMhs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DataMhs();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_mahasiswa' => $model->id_mahasiswa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataMhs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_mahasiswa Id Mahasiswa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nim)
    {
        $model = $this->findModel($nim);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nim' => $model->nim]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataMhs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_mahasiswa Id Mahasiswa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_mahasiswa)
    {
        $this->findModel($id_mahasiswa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataMhs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_mahasiswa Id Mahasiswa
     * @return DataMhs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nim)
    {
        if (($model = DataMhs::findOne(['nim' => $nim])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
