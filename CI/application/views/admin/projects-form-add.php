
<h2 class="text-center">Add a New Project</h2>
      <br><br>
<form id="basicForm" action="validate" method="post" class="form-horizontal">

  <div class="form-group">
    <label class="col-sm-3 control-label"></span>Project Name<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" name="name" value="" class="form-control" placeholder="" required />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label"></span>Project Category<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <textarea rows="5" class="form-control" name="category" placeholder="Type  Category..." ></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Project Location/Address<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <textarea rows="5" class="form-control" name="location" placeholder="Type  address..." ></textarea>
    </div>
  </div>
  <div class="form-group">
     <label class="col-sm-3 control-label">Type</label>
    <div class="col-sm-8">
      <div class="col-sm-3">
       <select name="type" class="filter-status  form-control">
        <option value="0">P1</option>
        <option value="1">P2</option>
        <option value="2">P3</option>
       </select>
      </div>
    </div>
  </div>
  <div class="form-group">
     <label class="col-sm-3 control-label">Parent Project</label>
    <div class="col-sm-8">
      <div class="col-sm-3">
       <select name="parent_project" class="filter-status  form-control">
        <option value="0">P1</option>
        <option value="1">P2</option>
        <option value="2">P3</option>
       </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-9 col-sm-offset-3">
      <button class="btn btn-success btn-quirk btn-wide mr5">Submit</button>
      <button type="reset" class="btn btn-quirk btn-wide btn-warning">Reset</button>
      
      <a href="<?php echo base_url();?>project_management/project/showProject" type="reset" class="btn btn-quirk btn-wide btn-warning"><i class="fa fa-repeat"></i> Cancel </a>
    </div>
  </div>
  <?php echo validation_errors('<label class="col-md-3 control-label"><span class="text-danger"></span></label>'); ?>
</form>