  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Feedback</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header"></div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="tabledashboard">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Voucher</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; foreach ($list as $rows) : $i++; ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $rows->fb_name; ?></td>
                      <td><?php echo $rows->fb_email; ?></td>
                      <td><?php echo $rows->fb_phone; ?></td>
                      <td><?php echo $rows->fb_voucher; ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
