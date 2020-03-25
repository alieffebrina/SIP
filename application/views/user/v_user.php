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
                        <h3 class="box-title">User</h3>
                        <div class="box-tools pull-right">
                            <a href="<?php echo site_url('C_User/vadd')?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah User</a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nama</th>                             
                                <th>Username</th>
                                <th>Password</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php foreach($tb_user as $user){ ?>
                              <tr id="<?php echo $user->id?>" name="id">
                                  <th class="text-center"><?php echo $user->id ?></th>
                                  <th><?php echo $user->nama ?></th>
                                  <th><?php echo $user->username ?></th>
                                  <th><?php echo $user->password ?></th>
                                  <th class="text-center">
                                    <a href="<?php echo site_url('C_User/vedit/'.$user->id)?>"><i class="fa fa-edit"></i></a>
                                    <!-- <a href="<?php //echo site_url('C_User/delete/'.$user->id)?>"><i class="fa fa-trash remove"></i></a></th> -->
                                    <a href="<?php echo site_url('C_User/delete/'.$user->id)?>" onclick="return confirm('Yakin Hapus?')"><i class="fa fa-trash remove"></i></a>
                                    <!-- <a onclick="deletedata()" id="<?php echo $user->id;?>"><i class="fa fa-trash remove"></i></a></th> -->
                              </tr>
                            <?php } if ($tb_user == null){ ?>
                              <tr>
                                <td colspan="3" class="text-center">Data not available !</td>
                              </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </section>
  </div>
<?php $this->load->view('template/footer'); ?>
<script>
    function deletedata($id){
       var id = $(this).attr("id");

         swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!"+id,
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm) {
            if (isConfirm) {
              $.ajax({
                 url: '<?php echo site_url('C_User/delete/')?>'+id,
                 type: 'delete',
                 data: {id:id},
                 error: function() {
                    alert('Something is wrong');
                 },
                 success: function(data) {
                      $("#"+id).remove();
                      swal("Deleted!", "Your imaginary file has been deleted.", "success");
                 }
              });
            } else {
              swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
          });
    }

</script>