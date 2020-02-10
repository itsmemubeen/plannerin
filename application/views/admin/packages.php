<?php $page = "Packages"; include('layout/header.php');?>
                <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Packages <a href="addPackage" class="btn btn-success float-right" >Add Packages</a></h1>
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
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sr.No</th>
                      <th>Name</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if(count($packages)): ?>
                    <?php foreach ($packages as $package): ?>
                    <tr>
                      <td><?php echo $package->id?></td>
                      <td><?php echo $package->name?></td>
                      <td>
                        <a href="<?php base_url() ?>/admin/event/edit/<?php echo $catering->id?>">Edit</a>
                        <a href="<?php base_url() ?>/admin/event/delete/<?php echo $catering->id?>">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach;?>
                <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <?php include('layout/footer.php');?>