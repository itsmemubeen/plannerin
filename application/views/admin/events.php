<?php $page = "events"; include('layout/header.php');?>
                <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Events <a href="addEvent" class="btn btn-success float-right" >Add Event</a></h1>
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
                      <th>Privacy</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th>Avenue</th>
                      <th>City</th>
                      <th>Start Date / Time</th>
                      <!-- <th>Start Time</th> -->
                      <th>End Date /Time</th>
                      <!-- <th>End Time</th> -->
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Website</th>
                      <!-- <th>Facebook</th> -->
                      <!-- <th>Instagram</th> -->
                      <!-- <th>Twitter</th> -->
                      <th>Ticket Type</th>
                      <th>Ticket Price</th>
                      <th>Package</th>
                      <th>Location</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sr.No</th>
                      <th>Name</th>
                      <th>Privacy</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th>Avenue</th>
                      <th>City</th>
                      <th>Start Date / Time</th>
                      <!-- <th>Start Time</th> -->
                      <th>End Date /Time</th>
                      <!-- <th>End Time</th> -->
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Website</th>
                      <!-- <th>Facebook</th> -->
                      <!-- <th>Instagram</th> -->
                      <!-- <th>Twitter</th> -->
                      <th>Ticket Type</th>
                      <th>Ticket Price</th>
                      <th>Package</th>
                      <th>Location</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php if(count($events)) :?>
                      <?php foreach($events as $event) :?>
                    <tr>
                      <td><?php echo $event->id?></td>
                      <td><?php echo $event->name?></td>
                      <td><?php echo $event->event_privacy?></td>
                      <td><?php echo $event->event_category?></td>
                      <td><?php echo $event->event_description?></td>
                      <td><?php echo $event->event_avenue?></td>
                      <td><?php echo $event->event_city?></td>
                      <td><?php echo $event->event_startdate?>/<?php echo $event->event_starttime?></td>
                      <!-- <td><?php echo $event->event_starttime?></td> -->
                      <td><?php echo $event->event_enddate?>/<?php echo $event->event_endtime?></td>
                      <!-- <td><?php echo $event->event_endtime?></td> -->
                      <td><?php echo $event->event_contact?></td>
                      <td><?php echo $event->event_email?></td>
                      <td><?php echo $event->event_website?></td>
                      <!-- <td><?php echo $event->event_facebook?></td> -->
                      <!-- <td><?php echo $event->event_Instagram?></td> -->
                      <!-- <td><?php echo $event->event_twitter?></td> -->
                      <td><?php echo $event->ticket_type?></td>
                      <td><?php echo $event->event_ticket_price?></td>
                      <td><?php echo $event->event_package?></td>
                      <td><?php echo $event->event_location?></td>
                      <td>
                        <a href="<?php base_url() ?>/admin/event/edit/<?php echo $event->id?>">Edit</a>
                        <a href="<?php base_url() ?>/admin/event/delete/<?php echo $event->id?>">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <?php include('layout/footer.php');?>