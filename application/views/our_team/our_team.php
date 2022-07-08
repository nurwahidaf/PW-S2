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
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card ">
            <img src="<?php echo base_url();?>/assets-img/img1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-bold">0110221210</h5><br>
                <h5 class="card-title">Ahnaf Musyaffa</h5>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="<?php echo base_url();?>/assets-img/img2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-bold">0110221191</h5><br>
                <h5 class="card-title">Avriel Dilfu Izza</h5>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="<?php echo base_url();?>/assets-img/img3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-bold">0110221185</h5><br>
                <h5 class="card-title">Hasan Al Banna</h5>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="<?php echo base_url();?>/assets-img/img4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-bold">0110221207</h5><br>
                <h5 class="card-title">Nurwahida Fitriani</h5>
            </div>
            </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->