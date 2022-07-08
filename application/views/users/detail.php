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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $page_title ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Latlong</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Jenis Wisata</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Harga Tiket</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Fasilitas</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4">
                    Foto
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->