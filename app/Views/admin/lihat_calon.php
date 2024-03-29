
<?= $this->extend('menu/footer'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>DATA CALON PASANGAN</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Data Calon Pasangan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                            <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                <th>FOTO</th>
                                <th>NAMA LENGKAP</th>
                                <th><center>KOTA/KABUPATEN</th>
                                <th><center>PERIODE</th>
                                <th><center>NO URUT</th>
                                <th><center>AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data as $value){  ?>
                                <tr>
                                <td><center><?php if($value['foto_ketua']==NULL){
                                   echo '<img src="images/user.png" width="70px" height="70px" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                                   style="opacity: .8">';
                                   }else{ echo '<img src="'.$value['foto_ketua'].'" width="120px" height="120px" class="brand-image img-circle elevation-3"
                                    style="opacity: .8"><img src="'.$value['foto_wakil'].'" width="120px" height="120px" class="brand-image img-circle elevation-3"
                                    style="opacity: .8">';};?></td>
                                <td>
                                <b>Walikota : <?= $value['nama_ketua'];?></b>
                                <p>
                                <p><b>Wakil Walikota : <?= $value['nama_wakil'];?></b>
                                </td>
                                <td><center><?= $value['kabupaten'];?></td>
                                <td><center><?= $value['periode'];?></td>
                                <td><center><?= $value['no_urut'];?></td>
                                <td><center>
                                      <a href='/pasangan_calon/<?= $value['id'] ?>'><span><button title="Detail" type="button" class="btn btn-primary"><span class="fas fa-eye"></span></button></span>
                                      <a href='/pasangan_calon/<?= $value['id'] ?>'><span><button title="Validasi" type="button" class="btn btn-success"><span class="fas fa-check"></span></button></span>
                                      <a href='/pasangan_calon/<?= $value['id'] ?>'><span><button title="Hapus" type="button" class="btn btn-danger"><span class="fas fa-trash-alt"></span></button></span>
                                      </td>
                                </tr>
                                <?php }?>
                                </tbody>
                                <tfoot>
                                <tr>
                                <th>FOTO</th>
                                <th>NAMA LENGKAP</th>
                                <th><center>KOTA/KABUPATEN</th>
                                <th><center>PERIODE</th>
                                <th><center>NO URUT</th>
                                <th><center>AKSI</th>
                                </tr>
                                </tfoot>
                            </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
  <?= $this->endSection(); ?>