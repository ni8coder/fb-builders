
<h2 class="text-center">Add a New Expense</h2>
      <br><br>
<form id="basicForm" action="../validate/<?php echo $this->uri->segment(4);?>" method="post" class="form-horizontal">

  <div class="form-group">
    <label class="col-sm-3 control-label">Expense By<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" name="expense_by" value="" class="form-control" placeholder="" required />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Amount<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" name="amount" value="" class="form-control" placeholder="" required />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Description<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <textarea rows="5" class="form-control" name="description" placeholder="Type  Category..." ></textarea>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-9 col-sm-offset-3">
      <button class="btn btn-success btn-quirk btn-wide mr5">Add Expense</button>
      <button type="reset" class="btn btn-quirk btn-wide btn-warning">Reset</button>
      
      <a href="<?php echo base_url();?>project_management/project/showDetail/<?php echo $this->uri->segment(4);?>" type="reset" class="btn btn-quirk btn-wide btn-warning"><i class="fa fa-repeat"></i> Cancel </a>
    </div>
  </div>
  <?php echo validation_errors('<label class="col-md-3 control-label"><span class="text-danger"></span></label>'); ?>
</form>