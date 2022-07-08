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
            <h3 class="card-title"><?= $page_title ?> Tempat Wisata</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php // form_open('Tempat_wisata/edit_data_2', ['method'=>'POST']) ?>
            <form class="form-horizontal m-2" method="POST" action="<?php echo base_url();?>Tempat_wisata/edit_data_tempat" autocomplete="off">
            <input type="hidden" name="id" value="<?php echo $tempat_wisata['id']; ?>">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="tempat_wisata" class="col-sm-2 col-form-label">Nama Tempat Wisata</label> 
                        <div class="col-10">
                        <input id="tempat_wisata" name="tempat_wisata" type="text" class="form-control" required="required" value="<?php echo $tempat_wisata['nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label> 
                        <div class="col-10">
                        <input id="alamat" name="alamat" type="text" class="form-control" required="required" value="<?php echo $tempat_wisata['alamat']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="latlong" class="col-sm-2 col-form-label">Latlong</label> 
                        <div class="col-10">
                        <input id="latlong" name="latlong" type="text" class="form-control" required="required" value="<?php echo $tempat_wisata['latlong']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_wisata" class="col-sm-2 col-form-label">Jenis Wisata</label> 
                        <div class="col-10">
                        <select id="jenis_wisata" name="jenis_wisata" required="required" class="custom-select" value="<?php echo $tempat_wisata['jenis_id']; ?>">
                            <option value="1">Kolam Renang</option>
                            <option value="2">Taman</option>
                            <option value="3">Pemancingan</option>
                            <option value="4">Museum</option>
                            <option value="5">Perkebunan</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rating" class="col-sm-2 col-form-label">Rating</label> 
                        <div class="col-10">
                        <input id="rating" name="rating" placeholder="5.0" type="text" class="form-control" required="required" value="<?php echo $tempat_wisata['skor_rating']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_tiket" class="col-sm-2 col-form-label">Harga Tiket Masuk</label> 
                        <div class="col-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                            </div> 
                            <input id="harga_tiket" name="harga_tiket" placeholder="10000" type="text" required="required" class="form-control" value="<?php echo $tempat_wisata['harga_tiket']; ?>">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label> 
                        <div class="col-10">
                        <select id="kecamatan" name="kecamatan" class="custom-select" required="required" value="<?php echo $tempat_wisata['kecamatan_id']; ?>">
                            <option value="1">Beji</option>
                            <option value="2">Pancoran Mas</option>
                            <option value="3">Sawangan</option>
                            <option value="4">Bojongsari</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-sm-2 col-form-label">Website</label> 
                        <div class="col-10">
                        <input id="website" name="website" type="text" class="form-control" required="required" value="<?php echo $tempat_wisata['website']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasilitas" class="col-sm-2 col-form-label">Fasilitas</label> 
                        <div class="col-10">
                        <input id="fasilitas" name="fasilitas" type="text" class="form-control" required="required" value="<?php echo $tempat_wisata['fasilitas']; ?>">
                        </div>
                    </div> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Ubah</button>
                    <a type="button" class="btn btn-default" href="<?php echo base_url();?>Tempat_wisata/index">Cancel</a>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->