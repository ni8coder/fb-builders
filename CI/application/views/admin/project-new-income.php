<div class="col-md-12 col-lg-12">
<form id="basicForm" action="../validate/<?php echo $this->uri->segment(4);?>" method="post" class="form-horizontal">
<h2 class="text-center">Add Income</h2>
  <div class="form-group">
    <label class="col-sm-3 control-label">Select Customer</label>
    <div class="col-sm-8">
      <div class="col-sm-4">
       <select name="customer" class="filter-status  form-control">
       <?php if(isset($customer)){
          foreach ($customer as $customer) {?>
        <option value="<?php echo $customer->id ?>"><?php echo $customer->name ?></option>
        <?php }}?>
       </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Select Agent</label>
    <div class="col-sm-8">
      <div class="col-sm-4">
       <select name="agent" class="filter-status  form-control">
       <?php if(isset($agent)){
          foreach ($agent as $agent) {?>
        <option value="<?php echo $agent->id ?>"><?php echo $agent->name ?></option>
        <?php }}?>
       </select>
      </div>
    </div>
  </div>
  <h2 class="text-center">Income Information</h2>
  <br>
  <label class="col-sm-3 control-label">Amount<span class="text-danger">*</span></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="amount" placeholder="" required />
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
      <button class="btn btn-success btn-quirk btn-wide mr5">Add income</button>
      <button type="reset" class="btn btn-quirk btn-wide btn-warning">Reset</button>
      
      <a href="<?php echo base_url();?>project_management/project/showDetail/<?php echo $this->uri->segment(4);?>" type="reset" class="btn btn-quirk btn-wide btn-warning"><i class="fa fa-repeat"></i> Cancel </a>
    </div>
  </div>
</form>
</div>





