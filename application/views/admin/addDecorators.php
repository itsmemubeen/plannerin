<?php $page = "Add Decorators"; include('layout/header.php');?>
<div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Add Decorators <a href="event" class="btn btn-primary float-right" >Back</a></h1>
          <div class="card shadow mb-4">
            <?php if($error = $this->session->flashdata('msg') && $class = $this->session->flashdata('msg_class')):?>
              <div class="alert <?php echo $class; ?>"><?php echo $error; ?></div>
            <?php endif;?>
            <div class="card-body">
              <div class="table-responsive">
                <?php echo form_open('admin/addDecorators'); ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Enter Name','name'=>'decoration_name','value'=>set_value('decoration_name')])?>
            <?php echo form_error('decoration_name',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control form-control-user" name="decoration_desc" value="<?php echo set_value('decoration_desc')?>"></textarea>
            <?php echo form_error('decoration_desc',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <?php echo form_input(['class'=>'form-control form-control-user','name'=>'decoration_address','value'=>set_value('decoration_address')])?>
            <?php echo form_error('decoration_address',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">CNIC</label>
            <?php echo form_input(['class'=>'form-control form-control-user','name'=>'decoration_cnic','value'=>set_value('decoration_cnic')])?>
            <?php echo form_error('decoration_cnic',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <?php echo form_input(['class'=>'form-control form-control-user','name'=>'decoration_phone','value'=>set_value('decoration_phone')])?>
            <?php echo form_error('decoration_phone',"<div class='text-danger'>","</div>");?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="ticket-price">Price</label>
            <?php echo form_input(['class'=>'form-control form-control-user ticket-price','placeholder'=>'Ticket Price','name'=>'decoration_price','value'=>set_value('decoration_price')])?>
            <?php echo form_error('decoration_price',"<div class='text-danger'>","</div>");?>
          </div>
          <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-user btn-block','value'=>'Add'])?>
        </form>
              </div>
            </div>
          </div>

        </div>

<?php include('layout/footer.php');?>