<?php $page = "Add User"; include('layout/header.php');?>
<div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Add User <a href="users" class="btn btn-primary float-right" >Back</a></h1>
          <div class="card shadow mb-4">
          	<?php if($error = $this->session->flashdata('msg') && $class = $this->session->flashdata('msg_class')):?>
          		<div class="alert <?php echo $class; ?>"><?php echo $error; ?></div>
          	<?php endif;?>
            <div class="card-body">
              <div class="table-responsive">
              	<?php echo form_open('admin/adduser'); ?>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Enter Name','name'=>'name','value'=>set_value('name')])?>
				    <?php echo form_error('name',"<div class='text-danger'>","</div>");?>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Enter Email Adress','name'=>'email','value'=>set_value('email')])?>
				    <?php echo form_error('email',"<div class='text-danger'>","</div>");?>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Password</label>
				    <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')])?>
				    <?php echo form_error('password',"<div class='text-danger'>","</div>");?>
				  </div>
				  <div class="form-group">
				  	<label for="exampleInputEmail1">Role</label>
				    <select name="role" class="form-control">
				    	<option value="1">Admin</option>
				    	<option value="2">User</option>
				    </select>
				    <?php echo form_error('role',"<div class='text-danger'>","</div>");?>
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