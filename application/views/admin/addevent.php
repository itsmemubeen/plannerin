<?php $page = "Add Event"; include('layout/header.php');?>
<div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Add Event <a href="event" class="btn btn-primary float-right" >Back</a></h1>
          <div class="card shadow mb-4">
            <?php if($error = $this->session->flashdata('msg') && $class = $this->session->flashdata('msg_class')):?>
              <div class="alert <?php echo $class; ?>"><?php echo $error; ?></div>
            <?php endif;?>
            <div class="card-body">
              <div class="table-responsive">
                <?php echo form_open('admin/addEvent'); ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Enter Name','name'=>'name','value'=>set_value('name')])?>
            <?php echo form_error('name',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Event Privacy</label>
            <select name="event_privacy" class="form-control">
              <option value="public">Public</option>
              <option value="private">Private</option>
            </select>
            <?php echo form_error('event_privacy',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select name="event_category" class="form-control">
              <option value="art">Art/Litrature</option>
              <option value="beauty">Beauty & Lifestyle</option>
              <option value="charity">Charity</option>
              <option value="cinema">Cinema</option>
              <option value="comedy">Comedy</option>
              <option value="competition">Competition</option>
              <option value="concert">Concert / Music</option>
              <option value="conference">Conference</option>
              <option value="dance">Dance</option>
              <option value="deals">Deals</option>
              <option value="discussion">Discussion</option>
            </select>
            <?php echo form_error('event_category',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
           <!--  <textarea class="form-control form-control-user" name="event_description" value="<?php echo set_value('event_description')?>"></textarea> -->
           <?php echo form_input(['class'=>'form-control form-control-user','name'=>'event_description','value'=>set_value('event_startdate')])?>
            <?php echo form_error('event_description',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Event Avenue</label>
            <select name="event_avenue" class="form-control">
              <option value="airarabia">Air Arabia</option>
            </select>
            <?php echo form_error('event_avenue',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">City</label>
            <select name="event_city" class="form-control">
              <option value="karachi">Karachi</option>
              <option value="lahore">Lahore</option>
              <option value="islamabad">Islamabad</option>
              <option value="peshawar">Peshawar</option>
              <option value="hyderabad">Hyderabad</option>
              <option value="rawalpindi">Rawalpindi</option>
            </select>
            <?php echo form_error('role',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Start Date</label>
            <?php echo form_input(['class'=>'form-control form-control-user','name'=>'event_startdate','value'=>set_value('event_startdate'), 'type'=>'date'])?>
            <?php echo form_error('event_startdate',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Start Time</label>
            <?php echo form_input(['class'=>'form-control form-control-user','name'=>'event_starttime','value'=>set_value('event_starttime'), 'type'=>'time'])?>
            <?php echo form_error('event_starttime',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">End Date</label>
            <?php echo form_input(['class'=>'form-control form-control-user','name'=>'event_enddate','value'=>set_value('event_enddate'), 'type'=>'date'])?>
            <?php echo form_error('event_enddate',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">End Time</label>
            <?php echo form_input(['class'=>'form-control form-control-user','name'=>'event_endtime','value'=>set_value('event_endtime'), 'type'=>'time'])?>
            <?php echo form_error('event_endtime',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Contact</label>
            <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Enter Contact','name'=>'event_contact','value'=>set_value('event_contact')])?>
            <?php echo form_error('event_contact',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Enter Email Adress','name'=>'event_email','value'=>set_value('event_email')])?>
            <?php echo form_error('event_email',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Website</label>
            <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Enter Website','name'=>'event_website','value'=>set_value('event_website')])?>
            <?php echo form_error('event_website',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Facebook</label>
            <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Facebook','name'=>'event_facebook','value'=>set_value('event_facebook')])?>
            <?php echo form_error('event_facebook',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Instagram</label>
            <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Instagram','name'=>'event_Instagram','value'=>set_value('event_Instagram')])?>
            <?php echo form_error('event_Instagram',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Twitter</label>
            <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Twitter','name'=>'event_twitter','value'=>set_value('event_twitter')])?>
            <?php echo form_error('event_twitter',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Ticket Type</label>
            <select name="ticket_type" id="ticket-type" class="form-control">
              <option value="paid">Paid</option>
              <option value="free">Free</option>
            </select>
            <script type="text/javascript">
              $('#ticket-type').change(function(){
                var tt = $('#ticket-type').val();
                if(tt == "free"){
                  $('.ticket-price').hide();
                }else{
                  $('.ticket-price').show();
                }
              })
            </script>
            <?php echo form_error('ticket_type',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="ticket-price">Ticket Price</label>
            <?php echo form_input(['class'=>'form-control form-control-user ticket-price','placeholder'=>'Ticket Price','name'=>'event_ticket_price','value'=>set_value('event_ticket_price')])?>
            <?php echo form_error('event_ticket_price',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Package</label>
            <select name="event_package" class="form-control">
              <option value="Basic">Basic Package</option>
              <option value="Silver">Silver Package</option>
              <option value="Golden">Golden Package</option>
              <option value="Diamond">Diamond Package</option>
            </select>
            <?php echo form_error('package',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Location</label>
            <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Location','name'=>'event_location','value'=>set_value('location')])?>
            <!-- <div id="mapid"></div>
            <script type="text/javascript">
              var mymap = L.map('mapid').setView([51.505, -0.09], 13);
              L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                  attribution: '&copy; <a href="https://osm.org/copyright">openstreetmap</a> contributors'
              }).addTo(mymap);

              var searchControl = L.esri.Geocoding.geosearch().addTo(map);

              searchControl.on('result',function(data){
                result.clearLayers();

                for(var i = data.results.length - 1; i>=0; i--){
                  results.addLayer(L.marker(data.results[i].latlng));
                }

              })

            </script> -->
            <?php echo form_error('password',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <input type="text" style="visibility: hidden;" value="<?php echo date("Y-m-d h:i:sa"); ?>" name="created_at">
          </div>
          <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-user btn-block','value'=>'Add'])?>
        </form>
              </div>
            </div>
          </div>

        </div>

<?php include('layout/footer.php');?>