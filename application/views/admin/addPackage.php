<?php $page = "Add Package"; include('layout/header.php');?>
<div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Add Package <a href="packages" class="btn btn-primary float-right" >Back</a></h1>
          <div class="card shadow mb-4">
            <?php if($error = $this->session->flashdata('msg') && $class = $this->session->flashdata('msg_class')):?>
              <div class="alert <?php echo $class; ?>"><?php echo $error; ?></div>
            <?php endif;?>
            <div class="card-body">
              <div class="table-responsive">
                <?php echo form_open('admin/addDecorators'); ?>
                <div class="form-group">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <?php echo form_input(['class'=>'form-control form-control-user','placeholder'=>'Enter Name','name'=>'name','value'=>set_value('name')])?>
                    <?php echo form_error('name',"<div class='text-danger'>","</div>");?>
                  </div>
                  <label for="exampleInputEmail1">Decoration Package</label>
                 
                  <select name="decor_id" class="form-control">
                  <?php foreach($decorators as $decorator):?>
                    <option value="<?php echo $decorator->id?>"><?php echo $decorator->decoration_name?></option>
                  <?php endforeach;?>
                  </select>
                  <label for="exampleInputEmail1">Catering Package</label>
                  <select name="decor_id" class="form-control">
                    <?php foreach($caterings as $catering):?>
                    <option value="<?php echo $catering->id?>"><?php echo $catering->catering_name?></option>
                  <?php endforeach;?>
                  </select>
            <?php echo form_error('event_category',"<div class='text-danger'>","</div>");?>
          </div>

                <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-user btn-block','value'=>'Add'])?>
        </form>
              </div>
            </div>
          </div>

        </div>

<?php include('layout/footer.php');?>