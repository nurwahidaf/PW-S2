  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $page_title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $page_title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Horizontal Form -->
        <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title"><?= $page_title ?>Jenis Wisata</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal m-2" method="POST" action="<?php echo base_url();?>Jenis_wisata/add_data" autocomplete="off">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="jenis_wisata" class="col-sm-2 col-form-label">Jenis Wisata</label> 
                        <div class="col-10">
                        <input id="jenis_wisata" name="jenis_wisata" type="text" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a type="button" class="btn btn-default" href="<?php echo base_url();?>Jenis_wisata/index">Cancel</a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->