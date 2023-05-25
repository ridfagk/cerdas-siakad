<?php 
use yii\helpers\Html;
use backend\models\{HonorItem, Honor, DataPt};

$honor = Honor::find()->where(['id_honor' => $_GET['id_honor']])->one();
$honorItem = HonorItem::find()->where(['honor_id' => $_GET['id_honor']])->all();
$logopt = DataPt::find()->one();
$totalhonor = HonorItem::find()->where(['honor_id'=>$_GET['id_honor']])->sum('honor');
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
                <table class="table ">
                    <tr>
                    <td><?= Html::img('@imageurl/backend/web/img/'.$logopt->logo_pt,['width' => '150'])?></td>
                    <td style="text-align:right"><?= $honor->bulan.' '.$honor->tahun?></td>
                    </tr>
                </table>  
              <!-- info row -->
                <div>
                    <table class="table ">
                        <tr>
                        <td> From
                            <address>
                                <strong>ST PHBK</strong><br>
                                Gedung Sekolah Karakter <br>
                                Kawasan Podomoro Golf View, Tapos, Depok
                            </address>
                        </td>
                        <td style="text-align:left">To
                    <address>
                        <strong><?= $honor->pegawai->nama_pegawai?></strong><br>
                        
                    </address></td>
                        </tr>
                    </table>  
                    
                </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Mata Kuliah</th>
                      <th>Semester</th>
                      <th>Kegiatan</th>
                      <th>Honor</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($honorItem as $item) { ?>
                            <tr>
                                <td><?= $item->matkul->nama_matkul?></td>
                                <td><?= $item->semester?></td>
                                <td><?= $item->kegiatan?></td>
                                <td><?= $item->honor?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="3"><b>Total Honor</b></td>
                            <td><b><?= $totalhonor ?></b></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>