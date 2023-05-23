<div class="pt-3">
<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">Nama Dosen</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->nama_pegawai?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">NIP/NIDN</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->nip.'/'.$model->nidn?>
            </div>
        </div>
    </div>
</div><hr>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">Email</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->email?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">No Telpon</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->no_telp?>
            </div>
        </div>
    </div>
</div><hr>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">Tempat Lahir</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->tempat_lahir?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">Tanggal Lahir</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->tempat_lahir?>
            </div>
        </div>
    </div>
</div><hr>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">Jenis Kelamin</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->jenis_kelamin?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">Agama</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->agama?>
            </div>
        </div>
    </div>
</div><hr>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">Pendidikan Akhir</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->pendidikan_akhir?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-4">
            <h6 class="mb-0">Jabatan</h6>
            </div>
            <div class="col-sm-8 text-secondary">
            <?= $model->jabatan?>
            </div>
        </div>
    </div>
</div><hr>

<div class="row mb-2">
    <div class="col-sm-3">
    <h6 class="mb-0">Alamat</h6>
    </div>
    <div class="col-sm-9 text-secondary">
    <?= $model->alamat_pegawai?>
    </div>
</div>
</div>