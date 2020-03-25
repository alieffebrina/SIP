<?php 
    $this->load->view('template/header');   
    $this->load->view('template/sidebar');
?><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tipe User
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
        <li class="active">View</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">

          <!-- TO DO List -->
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Form Tipe User</h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo site_url('C_User')?>" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
                <div class="box-body">
                    <?php foreach($tb_user as $u){ ?>
                    <form action="<?php echo site_url('C_User/update')?>" method="post" enctype="multipart/form-data">
                      
                        <input type="hidden" name="id" value="<?php echo $u->id; ?>">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $u->nama; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form">
                                    <label for="" class="control-label">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $u->username; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="text" name="password" class="form-control" value="<?php echo $u->password; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="" class="control-label">Gambar </label>
                                    <input type="file" id="fileBarang" name="foto" value="<?php echo $u->foto; ?>">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="<?php echo site_url('C_User')?>" class="btn btn-warning"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-primary" name="btn" value="save"><i class="fa fa-save"></i>Simpan User</button>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
  </div>
<?php $this->load->view('template/footer'); ?>