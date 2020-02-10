<?php $page = "Users"; include('layout/header.php');?>
<!-- <?php echo print_r($users); ?> -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Users <a href="addUser" class="btn btn-success float-right" >Add User</a></h1>
     <!--      <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <?php  if($msg=$this->session->flashdata('msg')): 
          $msg_class=$this->session->flashdata('msg_class')
           ?>
          <div class="col-lg-12">
          <div class="alert <?= $msg_class ?>">
          <?= $msg; ?>
          </div>

          <?php endif; ?>

          </div>
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
                    <?php if(count($users)) :?>
                      <?php foreach($users as $user) :?>
                    <tr>
                      <td><?php echo $user->id?></td>
                      <td><?php echo $user->name?></td>
                      <td><?php echo $user->email?></td>
                      <td><?php echo $user->password?></td>
                      <td><?php if($user->role == "1"){echo "Admin";}if($user->role == "2"){echo "User";}?></td>
                      <td><?php echo $user->created_at?></td>
                      <td>
                        <a href="<?php base_url() ?>/admin/event/edit">Edit</a>
                        <a href="<?php base_url() ?>/admin/event/delete">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach;?>
                <?php endif;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <?php include('layout/footer.php');?>