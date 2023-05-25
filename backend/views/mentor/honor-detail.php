<?php 
use yii\helpers\Html;
use backend\models\HonorItem;

$totalhonor = HonorItem::find()->where(['honor_id'=>$_GET['id_honor']])->sum('honor');
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                  <?= Html::img('@imageurl/backend/web/img/'.$logopt->logo_pt,['width' => '150'])?><br>
                    <small class="float-right"><?= $honor->bulan.' '.$honor->tahun?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>ST PHBK</strong><br>
                    Gedung Sekolah Karakter <br>
                    Kawasan Podomoro Golf View, Tapos, Depok
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?= $honor->pegawai->nama_pegawai?></strong><br>
                    
                  </address>
                </div>
                
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

              <div class="row no-print">
                <div class="col-12">
                  <a href="honor-detail-print?id_honor=<?= $honor->id_honor?>&id_pegawai=<?=$honor->pegawai_id?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                
                </div>
              </div>
              
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>