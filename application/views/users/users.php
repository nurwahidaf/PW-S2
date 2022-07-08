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
                <a type="button" class="btn btn-block btn-warning" href="<?php echo base_url();?>Tempat_wisata/tambah_data">
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
                          Username
                      </th>
                      <th>
                          Password
                      </th>
                      <th>
                          Email
                      </th>
                      <th>
                          Created at
                      </th>
                      <th>
                          Last Login
                      </th>
                      <th>
                          Status
                      </th>
                      <th>
                          Role
                      </th>
                      <th class="text-center">
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php
                    $no = 1;
                    foreach ($users as $row) :
                ?>
                  <tr>
                      <td>
                          <?= $no++; ?>
                      </td>
                      <td>
                          <a>
                            <?= $row->username ?>
                          </a>
                      </td>
                      <td>
                          <a>
                          <?= $row->password ?>
                          </a>
                      </td>
                      <td>
                          <a>
                              <?= $row->email ?>
                          </a>
                      </td>
                      <td>
                          <a>
                          <?= $row->created_at ?>
                          </a>
                      </td>
                      <td>
                          <a>
                          <?= $row->last_login ?>
                          </a>
                      </td>
                      <td>
                          <a>
                          <?= $row->status ?>
                          </a>
                      </td>
                      <td>
                          <a>
                          <?= $row->role ?>
                          </a>
                      </td>
                      <td class="project-actions text-center">
                          <a class="btn btn-primary btn-sm" href="<?php echo base_url();?>Users/detail_data_users/<?php echo $row->id ?>">
                              <i class="fas fa-folder">
                              </i>
                              Detail
                          </a>
                          <a class="btn btn-info btn-sm" href="<?php echo base_url();?>users/edit_data_users/<?php echo $row->id ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?php echo base_url();?>users/delete_users/<?php echo $row->id ?>">
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