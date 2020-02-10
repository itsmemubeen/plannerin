<?php $page = "bookings"; include('layout/header.php');?>
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Booking</h1>
     <!--      <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Role</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sr.No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Role</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Mubeen</td>
                      <td>mubeen@gmail.com</td>
                      <td>123456789</td>
                      <td>Admin</td>
                      <td>10-10-20:12:00AM</td>
                      <td>
                        <a href="<?php base_url() ?>/admin/event/edit">Edit</a>
                        <a href="<?php base_url() ?>/admin/event/delete">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <?php include('layout/footer.php');?>