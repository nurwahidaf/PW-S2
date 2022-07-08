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
            <div class="col-md-2">
                <a type="button" class="btn btn-block btn-warning" href="<?php echo base_url();?>Kecamatan/tambah_data">
                    <i class="nav-icon far fa-plus-square"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th>
                          Kecamatan
                      </th>
                      <th class="text-center">
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php
                    $no = 1;
                    foreach ($kecamatan as $row) :
                ?>
                  <tr>
                      <td>
                          <?= $no++; ?>
                      </td>
                      <td>
                          <a>
                            <?= $row->nama ?>
                          </a>
                      </td>
                      <td class="project-actions text-center">
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url();?>Kecamatan/delete_data/<?php echo $row->id ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                <?php
                    endforeach;
                ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->