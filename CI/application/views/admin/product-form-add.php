<div class="col-md-12 col-lg-12">
<form id="basicForm" action="validate" method="post" class="form-horizontal">
<h2 class="text-center">Add A Product</h2>
  <div class="form-group">
    <label class="col-sm-3 control-label">Select Project</label>
    <div class="col-sm-8">
      <div class="col-sm-4">
       <select name="project" class="filter-status  form-control">
       <?php if(isset($data)){
          foreach ($data as $project) {?>
        <option value="<?php echo $project->id ?>"><?php echo $project->name ?></option>
        <?php }}?>
       </select>
      </div>
    </div>
  </div>
  <label class="col-sm-3 control-label">Product Name<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" placeholder="" required />
    </div>
    <label class="col-sm-3 control-label">Description<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="description" placeholder="" required />
    </div>
    <br>
    <div class="row">
      <label class="col-sm-3 control-label"></label>
    </div>
<div class="row">
    <div class="col-sm-9 col-sm-offset-3">
      <button class="btn btn-success btn-quirk btn-wide mr5">Add</button>
      <button type="reset" class="btn btn-quirk btn-wide btn-warning">Reset</button>
      
      <a href="<?php echo base_url();?>product_management/product/showProduct" type="reset" class="btn btn-quirk btn-wide btn-warning"><i class="fa fa-repeat"></i> Cancel </a>
    </div>
  </div>
</form>
</div>





