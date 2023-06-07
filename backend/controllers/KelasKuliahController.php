<?php

namespace backend\controllers;

use Yii;
use backend\models\{KelasKuliah, TimKelasKuliah, KelasKRS, MhsPresensi, MhsNilai, DataMatkul, SistemPenilaian};
use backend\models\KelasKuliahSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use backend\models\Model;

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
            'pagination' => $dataProvider->pagination,
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


    public function actionPeserta($id_kelas)
    {
        $id_kelas = $_GET['id_kelas'];
        $peserta = new ActiveDataProvider([
            'query' => KelasKRS::find()->where(['kelas_id'=>$id_kelas]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        return $this->render('peserta', [
            'peserta' => $peserta,
            'id_kelas' => $id_kelas,
            
        ]);
    }

    public function actionPresensi($id_kelas)
    {
        $id_kelas = $_GET['id_kelas'];
        $kelas = KelasKRS::find()->where(['kelas_id' => $id_kelas])->all();
        $presensis = MhsPresensi::find()->where(['kelas_id'=>$id_kelas])->all();

        return $this->render('presensi', [
            'kelas' => $kelas,
            'presensis' => $presensis,
            'id_kelas' => $id_kelas,
            
        ]);
    }
    
    
    public function actionFormPresensi($id_kelas)
    {
        $id_kelas = $_GET['id_kelas'];
        $countpeserta = KelasKRS::find()->where(['kelas_id' => $id_kelas])->count();
        $cekpresensi = MhsPresensi::find()->where(['kelas_id'=>$id_kelas])->one();
        if (empty($cekpresensi)) {
            $presensis = [new MhsPresensi];

            for ($i=1; $i < $countpeserta ; $i++) { 
                $presensis[] = new MhsPresensi();
            }
    
            if (Model::loadMultiple($presensis, Yii::$app->request->post()) && Model::validateMultiple($presensis)) {
                foreach ($presensis as $presensi) {
                    //Try to save the models. Validation is not needed as it's already been done.
                    $presensi->save(false);
    
                }
                return $this->redirect(['presensi','id_kelas'=>$id_kelas]);
            }
        } else {
            $presensis = [MhsPresensi::find()->where(['kelas_id'=>$id_kelas])->one()];

                for($i = 1; $i < $countpeserta; $i++) {
                    $presensis[] = MhsPresensi::find()->where(['kelas_id'=>$id_kelas])->one();
                    
                }
                
                
                //Load and validate the multiple models
                if (Model::loadMultiple($presensis, Yii::$app->request->post()) && Model::validateMultiple($presensis)) {

                    foreach ($presensis as $presensi) {
                        
                        //Try to save the models. Validation is not needed as it's already been done.
                        $presensi->save(false);

                    }
                    
                    
                    return $this->redirect(['presensi','id_kelas'=>$id_kelas]);
                }
        }
        
        return $this->renderAjax('form-presensi',['presensis'=>$presensis]); 
    
    }


    public function actionNilai($id_kelas)
    {
        $id_kelas = $_GET['id_kelas'];
        $kelas = KelasKRS::find()->where(['kelas_id' => $id_kelas])->all();
        $grades = MhsPresensi::find()->where(['kelas_id'=>$id_kelas])->all();

        return $this->render('nilai', [
            'kelas' => $kelas,
            'grades' => $grades,
            'id_kelas' => $id_kelas,
            
        ]);
    }

    public function actionFormNilai($id_kelas)
    {
        $id_kelas = $_GET['id_kelas'];
        $countpeserta = KelasKRS::find()->where(['kelas_id' => $id_kelas])->count();
        $cekkelas = KelasKRS::find()->where(['kelas_id' => $id_kelas])->one();
        $cekgrade = MhsNilai::find()->where(['kelas_id'=>$id_kelas])->one();
        $persentasinilai = DataMatkul::find()->where(['id_matkul'=>$cekkelas->matkul_id])->one();
        if (empty($cekgrade)) {
            $grades = [new MhsNilai];

            for ($i=1; $i < $countpeserta ; $i++) { 
                $grades[] = new MhsNilai();
            }
    
            if (Model::loadMultiple($grades, Yii::$app->request->post()) && Model::validateMultiple($grades)) {
                foreach ($grades as $grade) {
                    $grade->total_nilai = (($grade->nilai_uts * $persentasinilai->porsi_uts)/100) + (($grade->nilai_uas * $persentasinilai->porsi_uas)/100) + (($grade->nilai_tugas * $persentasinilai->porsi_tugas)/100) + (($grade->nilai_keaktifan * $persentasinilai->porsi_keaktifan)/100);
                        
                        if ($grade->total_nilai>=85) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>1])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }else if ($grade->total_nilai>=80 AND $grade->total_nilai < 85) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>2])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=75 AND $grade->total_nilai < 80) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>3])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=70 AND $grade->total_nilai < 75) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>4])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=65 AND $grade->total_nilai < 70) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>5])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=60 AND $grade->total_nilai < 65) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>6])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=55 AND $grade->total_nilai < 60) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>7])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=50 AND $grade->total_nilai < 55) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>8])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=40 AND $grade->total_nilai < 50) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>9])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                    $grade->save(false);
    
                }
                return $this->redirect(['nilai','id_kelas'=>$id_kelas]);
            }
        } else {
            $grades = [MhsNilai::find()->where(['kelas_id'=>$id_kelas])->one()];

                for($i = 1; $i < $countpeserta; $i++) {
                    $grades[] = MhsNilai::find()->where(['kelas_id'=>$id_kelas])->one();
                    
                }
                
                
                //Load and validate the multiple models
                if (Model::loadMultiple($grades, Yii::$app->request->post()) && Model::validateMultiple($grades)) {

                    foreach ($grades as $grade) {
                        
                        $grade->total_nilai = (($grade->nilai_uts * $persentasinilai->porsi_uts)/100) + (($grade->nilai_uas * $persentasinilai->porsi_uas)/100) + (($grade->nilai_tugas * $persentasinilai->porsi_tugas)/100) + (($grade->nilai_keaktifan * $persentasinilai->porsi_keaktifan)/100);
                        
                        if ($grade->total_nilai>=85) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>1])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }else if ($grade->total_nilai>=80 AND $grade->total_nilai < 85) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>2])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=75 AND $grade->total_nilai < 80) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>3])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=70 AND $grade->total_nilai < 75) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>4])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=65 AND $grade->total_nilai < 70) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>5])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=60 AND $grade->total_nilai < 65) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>6])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=55 AND $grade->total_nilai < 60) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>7])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=50 AND $grade->total_nilai < 55) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>8])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        else if ($grade->total_nilai>=40 AND $grade->total_nilai < 50) {
                            $sistemnilai = SistemPenilaian::find()->where(['id_sistemnilai'=>9])->one();
                            $grade->nilai_angka =  $sistemnilai->nilai_mutu;
                            $grade->nilai_huruf =  $sistemnilai->nilai_huruf;
                        }
                        //Try to save the models. Validation is not needed as it's already been done.
                        $grade->save(false);

                    }
                    
                    
                    return $this->redirect(['nilai','id_kelas'=>$id_kelas]);
                }
        }
        
        return $this->renderAjax('form-nilai',['grades'=>$grades]); 
    
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
