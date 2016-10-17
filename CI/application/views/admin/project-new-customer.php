
<h2 class="text-center">Add a New Customer</h2>
      <br><br>
<form id="basicForm" action="../validate/<?php echo $this->uri->segment(4);?>" method="post" class="form-horizontal">

  <div class="form-group">
    <label class="col-sm-3 control-label">MR No.<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" name="mr_no" value="" class="form-control" placeholder="" required />
    </div>
    <label class="col-sm-3 control-label">Name<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" placeholder="" required />
    </div>
    <label class="col-sm-3 control-label">Email<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="email" placeholder="" required />
    </div>
    <label class="col-sm-3 control-label">Username<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="username" placeholder="" required />
    </div>
    <label class="col-sm-3 control-label">Password<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="password" placeholder="" required />
    </div>
    <label class="col-sm-3 control-label">Address<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="address" placeholder="" required /> 
    </div>
    <label class="col-sm-3 control-label">Date of Birth<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="dob" placeholder="" required />
    </div>
    <label class="col-sm-3 control-label">CNIC<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="cnic" placeholder="" required />
    </div>
    <label class="col-sm-3 control-label">Phone No.<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="phoneno" placeholder="" required />
    </div>
  </div>

  <div class="row">
    <div class="col-sm-9 col-sm-offset-3">
      <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
      <button type="reset" class="btn btn-quirk btn-wide btn-warning">Reset</button>
      
      <a href="<?php echo base_url();?>project_management/project/showDetail/<?php echo $this->uri->segment(4);?>" type="reset" class="btn btn-quirk btn-wide btn-warning"><i class="fa fa-repeat"></i> Cancel </a>
    </div>
  </div>
  <?php echo validation_errors('<label class="col-md-3 control-label"><span class="text-danger"></span></label>'); ?>
</form>